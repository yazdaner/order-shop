@extends('Home::master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('home.products')}}">محصولات</a></li>
<li class="breadcrumb-item"><a href="">ایجاد محصول</a></li>
@endsection
@section('homeContent')
    <div class="row">
        <div class="col-12">
            <h4 class="mb-5">ایجاد محصول</h4>
            <form action="{{route('home.products.store')}}" method="post" class="padding-30"
                enctype="multipart/form-data">
                @csrf

                <x-input-home name="title" type="text" label="عنوان" />
                <x-input-home name="slug" type="text" label="عنوان انگلیسی" />

                <x-select-home name="category_id" label="دسته بندی محصول">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" @if (old('category') == $category->title) selected @endif>{{$category->title}}</option>
                    @endforeach
                </x-select-home>

                <x-select-home name="status" label="وضعیت محصول">
                    @foreach ($statuses as $status)
                        <option value="{{$status}}" @if (old('status') == $status) selected @endif>@lang($status)</option>
                    @endforeach
                </x-select-home>

                <x-file-upload-home name="media" label="تصویر اصلی محصول" />
                <x-file-upload-home name="images[]" label="تصاویر محصول" multiple="true" />

                <div class="col-12">
                    <x-textarea-home name="description" label="توضیحات" />
                </div>
                <div class="col-12">
                    <x-textarea-home name="body" label="محتوا" />
                </div>

                <button type="submit" class="btn mt-5 btn-yazdan">ایجاد</button>

            </form>
        </div>
    </div>
@endsection
@include('Common::views.admin.ckeditor',['names' => ['body','description']])

