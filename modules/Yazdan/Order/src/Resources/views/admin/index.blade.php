@extends('Dashboard::master')
@section('breadcrumb')
    <li><a href="#" title="محصولات سفارش داده شده">محصولات سفارش داده شده</a></li>
@endsection
@section('content')
<div class="main-content padding-0">
    <div class="row no-gutters">
        <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
            <div class="justify-content-between box__title pb-4">
                <h3 class="btn">محصولات سفارش داده شده</h3>
            </div>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>کاربر</th>
                            <th>عنوان</th>
                            <th>قیمت</th>
                            <th>تعداد</th>
                            <th>قیمت کل</th>
                            <th>وضعیت ارسال</th>
                            <th>کد رهگیری</th>
                            <th>تاریخ پرداخت</th>
                            <th>آدرس</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->user->username}}</td>
                            <td>{{$order->variation->product->title}} ({{$order->variation->title}})</td>
                            <td>{{number_format($order->price)}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{number_format($order->total_price)}}</td>
                            <td>{{__($order->status)}}</td>
                            <td>{{__($order->order->tracking_code ?? '-')}}</td>
                            <td>{{verta($order->created_at)->format('Y/n/j H:i')}}</td>
                            @php
                            $address = $order->user->address;
                            @endphp
                        <td><a class="btn-show btn btn-yazdan" href="#rolesModal" rel="modal:open" onclick="showAddress(event,'{{json_encode($address)}}','{{$address->province->name}}','{{$address->city->name}}')">نمایش</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $orders->links('pagination.admin') }}
            @include("Order::admin.address")
        </div>
    </div>
</div>
@endsection
@section('style')
    <link rel="stylesheet" href="../panel/css/modal.css">
@endsection
@section('script')
<script src="../panel/js/modal.js"></script>
<script>
    function showAddress(e,address,province,city){
        e.preventDefault();
        let data = JSON.parse(address);
        $("#ShowAddress .name").text(data.name);
        $("#ShowAddress .address").text(data.address);
        $("#ShowAddress .phone").text(data.phone);
        $("#ShowAddress .postal_code").text(data.postal_code);
        $("#ShowAddress .province").text(province);
        $("#ShowAddress .city").text(city);
    }
</script>
@endsection
