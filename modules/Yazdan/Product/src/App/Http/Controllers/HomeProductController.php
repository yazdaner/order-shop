<?php

namespace Yazdan\Product\App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yazdan\Seller\App\Models\Seller;
use Yazdan\Product\App\Models\Product;
use Yazdan\Product\Repositories\ProductRepository;
use Yazdan\Category\Repositories\CategoryRepository;
use Yazdan\Product\App\Http\Requests\ProductRequest;
use Yazdan\Seller\Repositories\SellerRepository;

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

}
