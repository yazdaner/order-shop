<?php

namespace Yazdan\Seller\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Yazdan\Seller\App\Models\Seller;
use Yazdan\Common\Responses\AjaxResponses;
use Yazdan\Seller\Repositories\SellerRepository;
use Yazdan\Seller\App\Http\Requests\SellerRequest;

class SellerController extends Controller
{
    public function index()
    {
        $this->authorize('manage', Seller::class);
        $sellers = SellerRepository::all();
        return view("Seller::admin.index", compact('sellers'));
    }

    public function accept($id)
    {
        $this->authorize('manage', Seller::class);
        if (SellerRepository::updateStatus($id, SellerRepository::STATUS_APPROVED)) {
            return AjaxResponses::SuccessResponses();
        }
        return AjaxResponses::ErrorResponses();
    }

    public function reject($id)
    {
        $this->authorize('manage', Seller::class);
        if (SellerRepository::updateStatus($id, SellerRepository::STATUS_REJECTED)) {
            return AjaxResponses::SuccessResponses();
        }
        return AjaxResponses::ErrorResponses();
    }


    public function destroy(Seller $seller)
    {
        $this->authorize('manage', Seller::class);
        destroyImage($seller);
        destroyImages($seller);
        $seller->delete();
        return AjaxResponses::SuccessResponses();
    }

    public function edit(Seller $seller)
    {
        $this->authorize('manage', Seller::class);
        return view("Seller::admin.edit", compact('seller'));
    }

    public function update(SellerRequest $request, $seller)
    {
        $this->authorize('manage', Seller::class);
        SellerRepository::update($seller,$request);
        newFeedbacks();
        return back();
    }
    // front

    public function sellersForm()
    {
        return view("Seller::front.index");
    }

    public function store(SellerRequest $request)
    {
        SellerRepository::store($request);
        newFeedbacks();
        return back();
    }

    // home


    public function profile()
    {
        $this->authorize('manage', Seller::class);
        return view('Seller::home.profile');
    }


}
