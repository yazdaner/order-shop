@extends('Home::master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('home.products')}}">محصولات</a></li>
<li class="breadcrumb-item"><a href="">ویرایش گالری</a></li>
@endsection
@section('homeContent')
<div class="main-content users">
    <div class="row bg-white">
            <p class="box__title">ویرایش گالری محصول</p>

          <div class="container p-4">
            <form action="{{route('admin.products.addImagesGallery',$product->id)}}" method="post" class="padding-30 mb-5"
                enctype="multipart/form-data">
                @csrf
                <x-file-upload-home name="images[]" label="تصاویر محصول" multiple="true" />
                <button type="submit" class="btn btn-yazdan">ایجاد</button>
            </form>

           <div class="row">
            @foreach ($product->galleries as $image)
            <div class="col-md-3">
                <div class="card mb-3">

                        <a href="{{$image->getImage()}}" target="_blank">
                            <img src="{{$image->getImage(600)}}" class="card-img-top" alt="...">
                        </a>
                    <div class="card-footer text-center">
                        <a href="{{route('home.gallery.delete',$image->id)}}" class="btn d-inline-block btn-danger mt-0">حذف</a>
                    </div>
                </div>
            </div>
            @endforeach
           </div>
          </div>
    </div>
</div>
@endsection
