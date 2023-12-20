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

    public function store(SellerRequest $request)
    {
        SellerRepository::store($request);
        newFeedbacks();
        return redirect()->route('admin.sellers.index');
    }
}
