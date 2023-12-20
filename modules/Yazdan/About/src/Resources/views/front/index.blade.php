@extends('Front::master')
@section('content')

<!-- main wrapper start -->
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">صحه اصلی</a></li>
                                <li class="breadcrumb-item active" aria-current="page">درباره ما</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- about wrapper start -->
    <div class="about-us-wrapper pt-70 pb-70">
        <div class="container">
            <div class="row">
                <!-- About Text Start -->
                <div class="col-xl-6 col-lg-6">
                    <div class="about-text-wrap">
                       {!! $about->body !!}
                    </div>
                </div>
                <!-- About Text End -->
                <!-- About Image Start -->
                <div class="col-xl-5 col-lg-6 ml-auto">
                    <div class="about-image-wrap">
                        <img src="./assets/images/img/about/about.jpg" alt="About" />
                    </div>
                </div>
                <!-- About Image End -->
            </div>
        </div>
    </div>
    <!-- about wrapper end -->

    <!-- team area start -->
    <div class="team-area bg-gray pt-64 pb-32">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-title">
                        <h2>تیم خلاق ما</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member mb-30">
                        <div class="team-thumb">
                            <img src="./assets/images/img/team/team_member_1.jpg" alt="">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h3>جاناتان اسکات</h3>
                            <h6>مدیر عامل</h6>
                            <p>یک الگوی تجارت الکترونیک بسیار شیک و تمیز با امکانات بی پایان است.</p>
                        </div>
                    </div>
                </div> <!-- end single team member -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member mb-30">
                        <div class="team-thumb">
                            <img src="./assets/images/img/team/team_member_2.jpg" alt="">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h3>جاناتان اسکات</h3>
                            <h6>مدیر عامل</h6>
                            <p>یک الگوی تجارت الکترونیک بسیار شیک و تمیز با امکانات بی پایان است.</p>
                        </div>
                    </div>
                </div> <!-- end single team member -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member mb-30">
                        <div class="team-thumb">
                            <img src="./assets/images/img/team/team_member_3.jpg" alt="">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h3>جاناتان اسکات</h3>
                            <h6>مدیر عامل</h6>
                            <p>یک الگوی تجارت الکترونیک بسیار شیک و تمیز با امکانات بی پایان است.</p>
                        </div>
                    </div>
                </div> <!-- end single team member -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member mb-30">
                        <div class="team-thumb img-full">
                            <img src="./assets/images/img/team/team_member_4.jpg" alt="">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h3>جاناتان اسکات</h3>
                            <h6>مدیر عامل</h6>
                            <p>یک الگوی تجارت الکترونیک بسیار شیک و تمیز با امکانات بی پایان است.</p>
                        </div>
                    </div>
                </div> <!-- end single team member -->
            </div>
        </div>
    </div>
    <!-- team area end -->

    <!-- choosing area start -->
    <div class="choosing-area pt-64 pb-34">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-title">
                        <h2>چرا ما را انتخاب کنید</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-choose-item text-center mb-30">
                        <i class="fa fa-globe"></i>
                        <h4>حمل و نقل رایگان</h4>
                        <p> یک الگوی تجارت الکترونیک بسیار شیک و تمیز با امکانات بی پایان است.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-choose-item text-center mb-30">
                        <i class="fa fa-plane"></i>
                        <h4>تحویل سریع</h4>
                        <p>یک الگوی تجارت الکترونیک بسیار شیک و تمیز با امکانات بی پایان است.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-choose-item text-center mb-30">
                        <i class="fa fa-comments"></i>
                        <h4>پشتیبانی مشتریان</h4>
                        <p>یک الگوی تجارت الکترونیک بسیار شیک و تمیز با امکانات بی پایان است.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choosing area end -->
</main>
<!-- main wrapper end -->
@endsection
