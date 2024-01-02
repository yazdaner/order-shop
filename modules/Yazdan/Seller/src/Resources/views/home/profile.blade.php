@extends('Home::master')
@section('homeContent')
<div class="col-12">
    <h3 class="">صفحه فروشنده</h3>
    <form action="{{route('seller.profile.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="row mt-4">

            <div class="mt-3">
                @if (isset(auth()->user()->seller->media))
                <a href="{{auth()->user()->seller->getImage()}}" target="_blank">
                    <img class="img-thumbnail" width="100" src="{{auth()->user()->seller->getImage()}}" />
                </a>
                @else
                <span class="selectedFiles">فایلی انتخاب نشده است</span>
                @endif
            </div>
            <div class="mt-4">
                <x-file-upload-home type="file" name="media" label="تصویر شاخص" />
            </div>
            <x-textarea-home name="body" label="توضیحات" value="{{auth()->user()->seller->body ?? old('body')}}" />



        </div>
        <div class="row">
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary" value="ذخیره تغییرات">
            </div>
        </div>
    </form>
</div>
@endsection
