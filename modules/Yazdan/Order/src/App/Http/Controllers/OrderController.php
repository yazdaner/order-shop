<?php

namespace Yazdan\Order\App\Http\Controllers;

use Illuminate\Http\Request;
use Yazdan\Order\App\Models\Order;
use App\Http\Controllers\Controller;
use Yazdan\Address\App\Models\Address;
use Yazdan\Address\App\Models\Province;
use Yazdan\Order\App\Http\Requests\OrderRequest;
use Yazdan\Order\Repositories\OrderRepository;
use Yazdan\Product\App\Models\Variation;
use Yazdan\Product\Repositories\ProductRepository;
use Yazdan\Product\Repositories\VariationRepository;

class OrderController extends Controller
{
    // Front
    public function checkout(Request $request)
    {
        $quantity = $request->quantity;
        $variation_id = json_decode($request->variation)->id;
        $variation = VariationRepository::get($variation_id);

        $address = Address::where('user_id', auth()->id())->first();
        $provinces = Province::all();

        return view("Order::front.checkout",compact('address','provinces','variation','quantity'));
    }


    // Home
    public function orders()
    {
        return view("Order::home.index");
    }

     // Admin
     public function index()
     {
         return view("Order::admin.index");
     }

     public function edit(Order $order)
     {
        $statuses = OrderRepository::$statuses;
        return view("Order::admin.edit",compact('order','statuses'));
     }

     public function update(Order $order,OrderRequest $request)
     {
        $this->authorize('manage', Order::class);
        OrderRepository::update($order, $request);
        newFeedbacks();
        return redirect(route('admin.orders.index'));
     }
}
