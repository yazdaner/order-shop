<?php

namespace Yazdan\Product\App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yazdan\Media\App\Models\Gallery;
use Yazdan\Seller\App\Models\Seller;
use Yazdan\Product\App\Models\Product;
use Yazdan\Common\Responses\AjaxResponses;
use Yazdan\Seller\Repositories\SellerRepository;
use Yazdan\Product\Repositories\ProductRepository;
use Yazdan\Category\Repositories\CategoryRepository;
use Yazdan\Product\App\Http\Requests\GalleryRequest;
use Yazdan\Product\App\Http\Requests\ProductRequest;

class HomeProductController extends Controller
{

    public function sellerProducts()
    {
        $products = Product::latest()->paginate(20);
        return view('Product::home.index',compact('products'));
    }

    public function create()
    {
        $this->authorize('manage', Product::class);
        $statuses = ProductRepository::$statuses;
        $categories = CategoryRepository::getTypeAll(Product::class);
        return view('Product::home.create', compact('statuses', 'categories'));
    }

    public function store(ProductRequest $request)
    {
        $this->authorize('manage', Product::class);

        $sellerId = SellerRepository::getSeller();

        if($sellerId == null){
            newFeedbacks('error', 'فروشنده یاقت نشد', 'error');
            return redirect(route('home.products'));
        }

        try {
            DB::beginTransaction();

            $request = storeImage($request);
            $request = storeImages($request);
            ProductRepository::store($request,$sellerId);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            newFeedbacks('error', $ex->getMessage(), 'error');
            return redirect(route('home.products'));
        }

        newFeedbacks();
        return redirect(route('home.products'));
    }

    public function destroy($id)
    {
        $this->authorize('manage', Product::class);
        try {
            DB::beginTransaction();
            ProductRepository::delete($id);
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            return AjaxResponses::ErrorResponses();
        }
        return AjaxResponses::SuccessResponses();
    }

    public function edit(Product $product)
    {
        $this->authorize('manage', Product::class);
        $statuses = ProductRepository::$statuses;
        $categories = CategoryRepository::getTypeAll(Product::class);
        return view('Product::home.edit', compact('product', 'statuses', 'categories'));
    }

    public function update(Product $product, ProductRequest $request)
    {
        $this->authorize('manage', Product::class);
        try {
            DB::beginTransaction();

            $request = updateImage($request, $product);
            ProductRepository::update($product->id, $request);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            newFeedbacks('error', $ex->getMessage(), 'error');
            return redirect(route('home.products'));
        }
        newFeedbacks();
        return redirect(route('home.products'));
    }

    public function gallery(Product $product)
    {
        $this->authorize('manage', Product::class);
        return view('Product::home.gallery', compact('product'));
    }

    public function deleteImageGallery(Gallery $gallery)
    {
        $this->authorize('manage', Product::class);
        try {
            DB::beginTransaction();
            destroyImage($gallery);
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            newFeedbacks('error', $ex->getMessage(), 'error');
            return back();
        }
        newFeedbacks();
        return back();
    }

    public function addImagesGallery(Product $product, GalleryRequest $request)
    {
        $this->authorize('manage', Product::class);

        try {
            DB::beginTransaction();

            $request = storeImages($request);
            addImagesGallery($product, $request);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            newFeedbacks('error', $ex->getMessage(), 'error');
            return back();
        }

        newFeedbacks();
        return back();
    }

}
