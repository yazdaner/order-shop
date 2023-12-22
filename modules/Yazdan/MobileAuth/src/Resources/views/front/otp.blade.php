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
                                <li class="breadcrumb-item active" aria-current="page">ورود با رمز یکبار مصرف</li>
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
                    <!-- Login Content Start -->
                    <div class="col-lg-6">
                        <div class="login-reg-form-wrap">
                            <h2 class="text-center">ورود با رمز یکبار مصرف</h2>
                            <form action="#" method="post">
                                <div class="single-input-item mb-3">
                                    <label for="mobile" class="required">شماره موبایل</label>
                                    <input type="tel" id="mobile" name="mobile" placeholder="شماره موبایل"
                                        value="{{old('mobile')}}"/>
                                </div>
                                <div class="single-input-item mb-3">
                                    <label for="password" class="required">رمز یکبار مصرف</label>
                                    <input type="password" id="password" name="password" placeholder="گذرواژه"
                                        value="{{old('password')}}"/>
                                </div>

                                <div class="single-input-item d-flex justify-content-between align-items-center">
                                    <a href="{{route('password-login')}}">ورود با گذرواژه</a>
                                    <button class="btn btn__bg">ورود</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login Content End -->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
