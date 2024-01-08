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

        if($request->quantity > $variation->quantity)
        {
            newFeedbacks('ناموفق',' تعداد محصول انتخابی بیشتر از حد مجاز می باشد','error');
            return back();
        }

        $address = Address::where('user_id', auth()->id())->first();
        $provinces = Province::all();

        return view("Order::front.checkout",compact('address','provinces','variation','quantity'));
    }

    public function buy(Request $request)
    {
        if(auth()->user()->address == null){
            newFeedbacks('ناموفق','لطفا آدرس خود را وارد کنید','error');
            return back();
        }

        $variation = VariationRepository::get($request->variation_id);

        if($request->quantity > $variation->quantity)
        {
            newFeedbacks('ناموفق',' تعداد محصول انتخابی بیشتر از حد مجاز می باشد','error');
            return redirect($variation->product->path());
        }

        OrderRepository::create($request);
        newFeedbacks('با موفقعیت','سفارش شما به ثبت رسید');
        return redirect()->route('users.orders');
    }

    // Home
    public function orders()
    {
        $orders = Order::where('user_id', auth()->id())->latest()->paginate('10');
        return view("Order::home.index",compact('orders'));
    }

     // Admin
     public function index()
     {
        $orders = Order::latest()->paginate('10');
         return view("Order::admin.index",compact('orders'));
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
