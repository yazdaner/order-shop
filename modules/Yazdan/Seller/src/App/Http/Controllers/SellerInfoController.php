<?php

namespace Yazdan\Seller\App\Http\Controllers;


use App\Http\Controllers\Controller;
use Yazdan\Seller\App\Models\Seller;
use Yazdan\Seller\Repositories\SellerRepository;


class SellerInfoController extends Controller
{
    public function info()
    {
        $this->authorize('manage', Seller::class);
        $seller = SellerRepository::getSeller();
        return view('Seller::home.info.index',compact('seller'));
    }

}
