@extends('Dashboard::master')
@section('breadcrumb')
<li><a href="{{route('admin.blogs.index')}}" title="بلاگ ها">بلاگ ها</a></li>
<li><a href="#" title="ایجاد">ایجاد</a></li>
@endsection
@section('content')
<div class="main-content users">
    <div class="row no-gutters bg-white">
        <div class="col-12 p-0">
            <p class="box__title">ایجاد بلاگ</p>
            <form action="{{route('admin.blogs.store')}}" method="post" class="padding-30"
                enctype="multipart/form-data">
                @csrf

                <x-input name="title" type="text" placeholder="عنوان" />

               <div class="margin-top-15">
                <x-select name="category_id" label="دسته بندی">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </x-select>
               </div>

                <x-text-area name="preview" placeholder="متن پیش نمایش بلاگ" />

                <x-file-upload name="media" placeholder="تصویر بلاگ" />

                <div class="col-12">
                    <div class="my-3">
                        <label for="content" class="form-label">محتوا</label>
                        <textarea name="content" id="content" cols="30" rows="10"
                            class="form-control  @error('content') is-invalid @enderror">{{ old('content') ?? '' }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-yazdan">ایجاد</button>

            </form>
        </div>
    </div>
</div>
@endsection

@include('Common::views.admin.ckeditor',['names' => ['content']])

