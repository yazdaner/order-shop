@extends('Home::master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('home.products')}}" title="محصولات">محصولات</a></li>
<li class="breadcrumb-item"><a href="{{ route('home.variations.index',$variation->product_id) }}" title="متغییر های محصول">متغییر های محصول</a></li>
<li class="breadcrumb-item"><a href="#" title="ویرایش متغییر محصول">ویرایش متغییر محصول</a></li>
@endsection
@section('homeContent')
<div class="main-content padding-0">
    <div class="row no-gutters">
        <div class="col-12 bg-white p-0">
            <p class="box__title">بروزرسانی متغییر محصول</p>
            <form action="{{ route('home.variations.update', $variation->id) }}" method="post" class="padding-30">
                @csrf
                @method('put')
                <x-input-home name="title" type="text" label="عنوان" value="{{$variation->title}}" />
                <x-input-home name="quantity" type="number" label="تعداد" value="{{$variation->quantity}}" />
                <x-input-home name="price" type="number" label="قیمت" value="{{$variation->price}}" />
                <x-input-home name="price2" type="number" label="قیمت ویژه" value="{{$variation->price2}}" />
                <x-input-home name="sku" type="text" label="شناسه انبارداری" value="{{$variation->sku}}" />

                <button class="btn btn-yazdan">بروزرسانی</button>
            </form>
        </div>
    </div>
</div>
@endsection
