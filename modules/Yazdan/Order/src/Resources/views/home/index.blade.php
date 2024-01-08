@extends('Home::master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="">سفارشات شما</a></li>
@endsection
@section('homeContent')
<h3> سفارشات شما </h3>
<div class="mt-4">
    <div class="table-responsive">
        <table class="table table-center">
            <thead>
                <tr>
                    <th scope="col">عنوان</th>
                    <th scope="col">قیمت</th>
                    <th scope="col">تعداد</th>
                    <th scope="col">قیمت کل</th>
                    <th scope="col">وضعیت ارسال</th>
                    <th scope="col">کد رهگیری</th>
                    <th scope="col">تاریخ پرداخت</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders->sortDesc() as $order)
                <tr>
                    <th scope="row">{{$order->variation->product->title}} ({{$order->variation->title}})</th>
                    <td>{{number_format($order->price)}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{number_format($order->total_price)}}</td>
                    <td>{{__($order->status)}}</td>
                    <td>{{__($order->order->tracking_code ?? '-')}}</td>
                    <td>{{verta($order->created_at)->format('Y/n/j H:i')}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $orders->links('pagination.admin') }}
</div>
@endsection
