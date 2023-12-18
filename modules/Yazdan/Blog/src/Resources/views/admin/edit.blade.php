@extends('Dashboard::master')
@section('breadcrumb')
<li><a href="{{route('admin.blogs.index')}}" title="بلاگ ها">بلاگ ها</a></li>
<li><a href="#" title="ویرایش">ویرایش</a></li>
@endsection
@section('content')
<div class="main-content users">
    <div class="row no-gutters bg-white">
        <div class="col-12 p-0">
            <p class="box__title">ویرایش بلاگ</p>
            <form action="{{route('admin.blogs.update',$blog->id)}}" method="post" class="padding-30"
                enctype="multipart/form-data">
                @method('put')
                @csrf

                <x-input name="title" type="text" placeholder="عنوان" value="{{ $blog->title }}"/>

               <div class="margin-top-15">
                <x-select name="category_id" label="دسته بندی">
                    @foreach ($categories as $category)
                        <option @if ($blog->category->id == $category->id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </x-select>
               </div>

                <x-text-area name="preview" placeholder="متن پیش نمایش بلاگ"  value="{{ $blog->preview }}"/>

                <x-file-upload name="media" placeholder="تصویر بلاگ" :value="$blog->media"/>

                <div class="col-12">
                    <div class="my-3">
                        <label for="content" class="form-label">محتوا</label>
                        <textarea name="content" id="content" cols="30" rows="10"
                            class="form-control  @error('content') is-invalid @enderror">{!! $blog->content !!}</textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-yazdan">ویرایش</button>
            </form>
        </div>
    </div>
</div>
@endsection
@include('Common::views.admin.ckeditor',['names' => ['content']])

