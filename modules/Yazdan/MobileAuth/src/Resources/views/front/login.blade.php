@extends('Front::master')
@section('content')
<main>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">صفحه اصلی</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ورود</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-register-wrapper pt-40 pb-40">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="login-reg-form-wrap">
                            <h2 class="text-center">ورود</h2>
                            <form action="{{route('authCheck')}}" method="post">
                                @csrf

                                <x-input-home type="tel" name="mobile" label="شماره موبایل" />

                                <div class="single-input-item">
                                    <button class="btn btn__bg" type="submit">تایید شماره موبایل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
