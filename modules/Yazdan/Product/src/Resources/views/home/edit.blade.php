@extends('Home::master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('home.products')}}">محصولات</a></li>
<li class="breadcrumb-item"><a href="">ویرایش</a></li>
@endsection
@section('homeContent')
<div class="main-content users">
    <div class="row no-gutters bg-white">
        <div class="col-12 p-0">
            <p class="box__title">ویرایش محصول</p>
            <form action="{{route('home.products.update',$product->id)}}" method="post" class="padding-30"
                enctype="multipart/form-data">
                @csrf
                @method('put')

                <x-input-home name="title" type="text" label="عنوان" value="{{$product->title}}" />
                <x-input-home name="slug" type="text" label="عنوان انگلیسی" value="{{$product->slug}}" />

                <x-select-home name="category_id" label="دسته بندی محصول">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" @if ($product->category->title == $category->title) selected @endif>{{$category->title}}</option>
                    @endforeach
                </x-select-home>

                <x-select-home name="status" label="وضعیت محصول">
                    @foreach ($statuses as $status)
                        <option value="{{$status}}" @if ($product->status == $status) selected @endif>@lang($status)</option>
                    @endforeach
                </x-select-home>

                <x-file-upload-home name="media" label="تصویر اصلی محصول" :value="$product->media" />

                <div class="col-12">
                    <x-textarea-home name="description" label="توضیحات" value="{!!$product->description!!}" />
                </div>
                <div class="col-12">
                    <x-textarea-home name="body" label="محتوا" value="{!!$product->body!!}" />
                </div>

                <button type="submit" class="btn btn-yazdan mt-5">ویرایش</button>

            </form>
        </div>
    </div>
</div>
@endsection

@include('Common::views.admin.ckeditor',['names' => ['body','description']])
