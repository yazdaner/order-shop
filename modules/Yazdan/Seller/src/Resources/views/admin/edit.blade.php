@extends('Dashboard::master')
@section('breadcrumb')
<li><a href="{{ route('admin.sellers.index') }}" title="فروشندگان">فروشندگان</a></li>
<li><a href="#" title="ویراش فروشنده">ویراش فروشنده</a></li>
@endsection
@section('content')
<div class="main-content">
    <div class="row no-gutters">
        <div class="col-12 bg-white p-0">
            <p class="box__title">ویراش فروشنده</p>
            <form action="{{ route('admin.sellers.update',$seller->id) }}" class="padding-30" method="post">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-lg-6">
                        <x-input type="text" name="shop_name" placeholder="نام فروشگاه" value="{{$seller->shop_name}}" />
                    </div>

                    <div class="col-lg-6">
                        <x-input type="text" name="seller_name" placeholder="نام فروشنده"
                        value="{{$seller->seller_name}}" />

                    </div>

                    <div class="col-lg-6">
                        <x-input type="text" name="slug" placeholder="اسلاگ" value="{{$seller->slug}}" />

                    </div>

                    <div class="col-lg-6">
                        <x-input type="tel" name="mobile" placeholder="شماره موبایل" value="{{$seller->mobile}}" />

                    </div>

                    <div class="col-lg-6">
                        <x-input type="number" name="postal_code" placeholder="کد پستی" value="{{$seller->postal_code}}" />

                    </div>

                    <div class="col-lg-6">
                        <x-input type="number" name="card_number" placeholder="شماره حساب"
                        value="{{$seller->card_number}}" />
                    </div>
                    <div class="col-lg-6">

                        <x-input type="text" name="sheba_number" placeholder="شماره شبا"
                        value="{{$seller->sheba_number}}" />

                    </div>

                    <div class="col-lg-6">

                        <x-input type="text" name="national_number" placeholder="کد ملی"
                        value="{{$seller->national_number}}" />

                    </div>

                    <x-text-area placeholder="آدرس" name="address" value="{{$seller->address ?? ''}}" />
                    <x-text-area placeholder="زمینه کاری" name="description" value="{{$seller->description ?? ''}}" />

                </div>
                <button class="btn btn-yazdan">ویراش فروشنده</button>
            </form>
        </div>
    </div>
</div>
@endsection
