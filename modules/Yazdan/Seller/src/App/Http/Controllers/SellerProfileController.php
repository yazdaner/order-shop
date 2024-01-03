<?php

namespace Yazdan\Seller\App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yazdan\Media\App\Models\Gallery;
use Yazdan\Seller\App\Models\Seller;
use Yazdan\Seller\Repositories\SellerRepository;
use Yazdan\Product\App\Http\Requests\GalleryRequest;

class SellerProfileController extends Controller
{
    // home

    public function profile()
    {
        $this->authorize('manage', Seller::class);
        return view('Seller::home.profile.index');
    }

    public function profileUpdate(Request $request)
    {
        $this->authorize('manage', Seller::class);

        $request->validate([
            'body' => 'nullable|string',
            'media' => 'nullable|image',
        ]);
        $seller = SellerRepository::getSeller();
        if($seller->media){
            $request = updateImage($request, $seller);
        }else{
            $request = storeImage($request, $seller);
        }
        SellerRepository::updateFromSeller($seller->id, $request);
        newFeedbacks();
        return redirect(route('home.seller.profile'));
    }

    // gallery

    public function gallery()
    {
        $this->authorize('manage', Seller::class);
        $seller = SellerRepository::getSeller();
        return view('Seller::home.profile.gallery.index', compact('seller'));
    }

    public function deleteImageGallery(Gallery $gallery)
    {
        $this->authorize('manage', Seller::class);
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

    public function addImagesGallery(Seller $seller, GalleryRequest $request)
    {
        $this->authorize('manage', Seller::class);

        try {
            DB::beginTransaction();

            $request = storeImages($request);
            addImagesGallery($seller, $request);

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
