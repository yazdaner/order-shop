@extends('Home::master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="">محصولات</a></li>
@endsection
@section('homeContent')
<div class="main-content padding-0">
    <div class="row no-gutters">
        <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
        <h3 class="">محصولات</h3>
        <a class="btn btn-yazdan" href="{{route('home.products.create')}}">ایجاد محصول</a>

            <div class="table__box">
                <table class="table align-middle">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>بنر</th>
                            <th>عنوان</th>
                            <th>اسلاگ</th>
                            <th>متغییر های محصول</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr role="row" class="">
                                <td>{{$products->firstItem() + $key}}</td>
                                <td>
                                    <a href="{{$product->getImage()}}" target="_blank"><img src="{{$product->getImage(60)}}" class="profile_sm"></a>
                                </td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->slug}}</td>
                                <td>
                                    <a href="{{route('home.variations.index',$product->id)}}" class="btn btn-yazdan" title="متغیر های محصول">مشاهده</a>
                                </td>
                                <td>
                                    <a href="" onclick="deleteItem(event,'{{route('admin.products.destroy',$product->id)}}')" class="font-16" title="حذف"><i class="bi bi-trash3"></i></a>
                                    <a href="{{route('admin.products.edit',$product->id)}}" class="font-16" title="ویرایش"><i class="bi bi-pencil-square"></i></a>
                                    <a href="{{route('admin.products.gallery',$product->id)}}" class="font-16" title="ویرایش گالری"><i class="bi bi-image-fill"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $products->links('pagination.admin') }}
        </div>
    </div>
</div>
@endsection
