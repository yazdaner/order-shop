@extends('Home::master')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home.products')}}">محصولات</a></li>
    <li class="breadcrumb-item"><a href="">متغییر های محصول</a></li>
@endsection
@section('homeContent')
<div class="main-content padding-0">
    <div class="row">
        <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
            <p class="box__title">متغییر های محصول ({{$product->title}})</p>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>عنوان</th>
                            <th>تعداد</th>
                            <th>قیمت</th>
                            <th>قیمت ویژه</th>
                            <th>شناسه انبارداری</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($variations as $key => $variation)
                            <tr role="row">
                                <td>{{++$key}}</td>
                                <td>{{$variation->title}}</td>
                                <td>{{$variation->quantity}}</td>
                                <td>{{number_format($variation->price)}}</td>
                                <td>{{number_format($variation->price2)}}</td>
                                <td>{{$variation->sku}}</td>
                                <td>
                                    <a href="" onclick="deleteItem(event,'{{route('home.variations.destroy',$variation->id)}}')" class="font-16" title="حذف"><i class="bi bi-trash3"></i></a>
                                    <a href="{{route('home.variations.edit',$variation->id)}}" class="item-edit" title="ویرایش"><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('Product::home.variation.create')
    </div>
</div>
@endsection
