<?php

namespace Yazdan\Seller\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yazdan\Seller\App\Models\Seller;
use Yazdan\Common\Responses\AjaxResponses;
use Yazdan\Media\Services\MediaFileService;
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

    public function destroy(Seller $seller)
    {
        $this->authorize('manage', Seller::class);
        destroyImages($seller);
        $seller->delete();
        return AjaxResponses::SuccessResponses();
    }

    // front

    // index
    public function sellersForm()
    {
        return view("Seller::front.index");
    }

    public function store(SellerRequest $request)
    {
        dd($request->all());
        // SellerRequest
        SellerRepository::store($request);
        newFeedbacks();
        return back();
    }
}
