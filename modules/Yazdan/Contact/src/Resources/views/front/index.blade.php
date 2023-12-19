@extends('Front::master')
@section('content')
  <!-- breadcrumb area start -->
  <div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li>
                            <li class="breadcrumb-item active" aria-current="page">تماس با ما</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<div class="contact-area pt-40 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @include('Contact::front.form')
            </div>
            <div class="col-lg-6">
                <div class="contact-info">
                    <h2>تماس با ما</h2>
                    <p>{{$setting->description}}</p>
                    <ul>
                        <li><i class="fa fa-fax"></i>{{$setting->address}}</li>
                        <li><i class="fa fa-envelope-o"></i>{{$setting->email}}</li>
                        <li><i class="fa fa-phone"></i> {{$setting->telephone}}</li>

                    </ul>
                    <div class="working-time">
                        <h3>ساعات کاری</h3>
                        <p><span>دوشنبه - شنبه:</span>08 صبح تا 22 بعد از ظهر</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
