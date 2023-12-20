<?php

namespace Yazdan\Seller\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Yazdan\Common\Responses\AjaxResponses;
use Yazdan\Media\Services\MediaFileService;
use Yazdan\Seller\App\Http\Requests\SellerRequest;
use Yazdan\Seller\App\Models\Seller;
use Yazdan\Seller\Repositories\SellerRepository;

class SellerController extends Controller
{
    public function index()
    {
        $this->authorize('manage', Seller::class);
        $sellers = SellerRepository::all();
        $types = SellerRepository::$types;
        return view("Seller::admin.index", compact('sellers', 'types'));
    }

    public function store(SellerRequest $request)
    {
        $this->authorize('manage', Seller::class);

       $request = storeImage($request);
        SellerRepository::store($request);
        newFeedbacks();
        return redirect()->route('admin.sellers.index');
    }

    public function edit(Seller $seller)
    {
        $this->authorize('manage', Seller::class);
        $types = SellerRepository::$types;
        return view("Seller::admin.edit", compact('seller', 'types'));
    }

    public function update(Seller $seller, SellerRequest $request)
    {
        $this->authorize('manage', Seller::class);

        $request = updateImage($request,$seller);

        SellerRepository::update($seller->id, $request);
        newFeedbacks();
        return redirect()->route('admin.sellers.index');
    }

    public function destroy(Seller $seller)
    {
        $this->authorize('manage', Seller::class);
        destroyImage($seller);
        $seller->delete();
        return AjaxResponses::SuccessResponses();
    }
}
