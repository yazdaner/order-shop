@extends('Home::master')
@section('homeContent')
<div class="col-12">
    <h3 class="">صفحه فروشنده</h3>
    <form action="{{route('users.profile')}}" method="post">
        @csrf
        @method('patch')

        <div class="row mt-4">
            <div class="col-md-6">
                <x-input-home name="username" label="نام کاربری" value="{{auth()->user()->username}}">
                    <i data-feather="user" class="fea icon-sm icons"></i>
                </x-input-home>
            </div>
            <div class="col-md-6">
                <x-input-home name="name" label="نام" value="{{auth()->user()->name}}">
                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                </x-input-home>
            </div>
            <div class="col-md-6">
                <x-input-home name="email" label="ایمیل شما" value="{{auth()->user()->email}}" disabled>
                    <i data-feather="mail" class="fea icon-sm icons"></i>
                </x-input-home>
            </div>
            <div class="col-md-6">
                <x-input-home name="mobile" label="شماره موبایل" value="{{auth()->user()->mobile}}">
                    <i data-feather="phone" class="fea icon-sm icons"></i>
                </x-input-home>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary" value="ذخیره تغییرات">
            </div>
        </div>
    </form>
</div>
@endsection
