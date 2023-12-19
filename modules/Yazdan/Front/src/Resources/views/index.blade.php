@extends('Front::master')
@section('content')
<main>
 <!-- hero slider area start -->
 <div class="hero-slider-wrapper mt-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="hero-slider-active slick-dot-style">
                    <!-- slider item start -->
                    <div class="hero-item-inner">
                        <div class="hero-slider-item d-flex align-items-center bg-img" data-bg="assets/images/img/slider/home1-slide1.jpg">
                            <div class="hero-slider-content" style="direction: rtl;">
                                <h1>سبـد پـر از خریـد<br> محصولات میـوه و سبزیجات </h1>
                                <h4>غذای منجمد و سرد <br> میوه ها و سبزیجات تازه</h4>
                                <a href="shop.html" class="btn btn-slider">اکنون خرید کنید</a>
                            </div>
                        </div>
                    </div>
                    <!-- slider item start -->

                    <!-- slider item start -->
                    <div class="hero-item-inner">
                        <div class="hero-slider-item d-flex align-items-center bg-img" data-bg="assets/images/img/slider/home1-slide2.jpg">
                            <div class="hero-slider-content" style="direction: rtl;">
                                <h1>پـذیرایی از خریـداران <br>صبحـانه ، ناهـار و شـام</h1>
                                <h4>بهترین مکان برای همه پاستاهای رویدادهای <br>بال، دنده، برگر لذیذ و غذاهای دریایی</h4>
                                <a href="shop.html" class="btn btn-slider">اکنون خرید کنید</a>
                            </div>
                        </div>
                    </div>
                    <!-- slider item start -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero slider area end -->

    <!-- banner feature area start -->
    <div class="banner-feature pt-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-feature-wrapper">
                        <!-- feature single item start -->
                        <div class="banner-feature-item">
                            <div class="banner-feature-icon">
                                <img src="./assets/images/img/icon/icon1.png" alt="">
                            </div>
                            <div class="banner-feature-post">
                                <h6>ارسال رایگان</h6>
                                <p>ارسال رایگان برای تمام سفارش های ایران یا سفارش های بالای 200 تومان</p>
                            </div>
                        </div>
                        <!-- feature single item end -->

                        <!-- feature single item start -->
                        <div class="banner-feature-item">
                            <div class="banner-feature-icon">
                                <img src="./assets/images/img/icon/icon2.png" alt="">
                            </div>
                            <div class="banner-feature-post">
                                <h6>پشتیبانی 24/7
                                </h6>
                                <p> ساعت شبانه روز و 7 روز هفته با ما تماس بگیرید</p>
                            </div>
                        </div>
                        <!-- feature single item end -->

                        <!-- feature single item start -->
                        <div class="banner-feature-item">
                            <div class="banner-feature-icon">
                                <img src="./assets/images/img/icon/icon3.png" alt="">
                            </div>
                            <div class="banner-feature-post">
                                <h6>بازگشت 60 روزه</h6>
                                <p>اگر آن را دوست ندارید، 60 روز فرصت دارید تا آن را برگردانید.</p>
                            </div>
                        </div>
                        <!-- feature single item end -->

                        <!-- feature single item start -->
                        <div class="banner-feature-item">
                            <div class="banner-feature-icon">
                                <img src="./assets/images/img/icon/icon4.png" alt="">
                            </div>
                            <div class="banner-feature-post">
                                <h6>100٪ پرداخت امن</h6>
                                <p>ما پرداخت ایمن را با ضمانت تضمین می کنیم</p>
                            </div>
                        </div>
                        <!-- feature single item end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner feature area end -->

    <!-- feature categories area start -->
    <div class="feature-categories-area pt-40 pb-40" >
        <div class="container">
            <div class="row">
                <!-- new product item start -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single-item">
                        <div class="feature-product-title">
                            <h3>محصول جدید</h3>
                        </div>
                        <div class="ht-slick-slider-wrap" style="direction: ltr">
                            <div class="ht-slick-slider slick-row-15" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "prevArrow": ".prev-new", "nextArrow": ".next-new", "responsive":[{"breakpoint":768, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1}}]}'>
                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->
                            </div>
                            <!-- Start Slider Navigation -->
                            <div class="ht-slick-nav">
                                <button class="prev-new"><i class="ion-ios-arrow-left"></i></button>
                                <button class="next-new right"><i class="ion-ios-arrow-right"></i></button>
                            </div>
                            <!-- End Slider Navigation -->
                        </div>
                        <div class="product-click-all">
                            <a href="product-details.html">همه ورودی های جدید را ببینید <i class="ion-android-arrow-dropright"></i></a>
                        </div>
                    </div>
                </div>
                <!-- new product item end -->

                <!-- feature product item start -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single-item">
                        <div class="feature-product-title">
                            <h3>محصول برجسته</h3>
                        </div>
                        <div class="ht-slick-slider-wrap"style="direction: ltr">
                            <div class="ht-slick-slider slick-row-15" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "prevArrow": ".prev-feat", "nextArrow": ".next-feat", "responsive":[{"breakpoint":768, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1}}]}'>
                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-3.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->
                            </div>
                            <!-- Start Slider Navigation -->
                            <div class="ht-slick-nav">
                                <button class="prev-feat"><i class="ion-ios-arrow-left"></i></button>
                                <button class="next-feat right"><i class="ion-ios-arrow-right"></i></button>
                            </div>
                            <!-- End Slider Navigation -->
                        </div>
                        <div class="product-click-all">
                            <a href="product-details.html">همه ورودی های جدید را ببینید <i class="ion-android-arrow-dropright"></i></a>
                        </div>
                    </div>
                </div>
                <!-- feature product item end -->

                <!-- best seller item start -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single-item">
                        <div class="feature-product-title">
                            <h3>بهترین فروشندگان</h3>
                        </div>
                        <div class="ht-slick-slider-wrap"style="direction: ltr">
                            <div class="ht-slick-slider slick-row-15" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "prevArrow": ".prev-best", "nextArrow": ".next-best", "responsive":[{"breakpoint":768, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1}}]}'>
                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-3.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->
                            </div>
                            <!-- Start Slider Navigation -->
                            <div class="ht-slick-nav">
                                <button class="prev-best"><i class="ion-ios-arrow-left"></i></button>
                                <button class="next-best right"><i class="ion-ios-arrow-right"></i></button>
                            </div>
                            <!-- End Slider Navigation -->
                        </div>
                        <div class="product-click-all">
                            <a href="product-details.html">همه ورودی های جدید را ببینید<i class="ion-android-arrow-dropright"></i></a>
                        </div>
                    </div>
                </div>
                <!-- best seller item end -->
                 <!-- best seller item start -->
                 <div class="col-lg-3 col-md-6">
                    <div class="feature-single-item">
                        <div class="feature-product-title">
                            <h3>بهترین فروشندگان</h3>
                        </div>
                        <div class="ht-slick-slider-wrap"style="direction: ltr">
                            <div class="ht-slick-slider slick-row-15" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "prevArrow": ".prev-best", "nextArrow": ".next-best", "responsive":[{"breakpoint":768, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1}}]}'>
                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-3.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="feature-product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-feature-content">
                                        <div class="product-feature-content-inner">
                                            <div class="price-box">
                                                <span class="price-old"><del>60.000 </del></span>
                                                <span class="price-regular">50.000 <span style="font-size: 18px">تومان</span></span>
                                            </div>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>جدید</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="product-name">
                                                <h5><a href="product-details.html">فلش مموری فول اچ دی 8 گیگ</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->
                            </div>
                            <!-- Start Slider Navigation -->
                            <div class="ht-slick-nav">
                                <button class="prev-best"><i class="ion-ios-arrow-left"></i></button>
                                <button class="next-best right"><i class="ion-ios-arrow-right"></i></button>
                            </div>
                            <!-- End Slider Navigation -->
                        </div>
                        <div class="product-click-all">
                            <a href="product-details.html">همه ورودی های جدید را ببینید<i class="ion-android-arrow-dropright"></i></a>
                        </div>
                    </div>
                </div>
                <!-- best seller item end -->
            </div>
        </div>
    </div>
    <!-- feature categories area end -->

    <!-- feature categories area start -->
    <div class="categories-features-area pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="categories-feature-title-inner">
                        <!-- section title start -->
                        <div class="section-title">
                            <h2>میوه ها و سبزیجات</h2>
                        </div>
                        <!-- section title end -->

                        <!-- product tab menu start -->
                        <div class="feature-tab-menu">
                            <ul class="nav justify-content-start justify-content-lg-end">
                                <li><a data-bs-toggle="tab" class="active" href="#one">گوشت تازه</a></li>
                                <li><a data-bs-toggle="tab" href="#two">لبنیات و تخم مرغ</a></li>
                                <li><a data-bs-toggle="tab" href="#three">منجمد</a></li>
                            </ul>
                        </div>
                        <!-- product tab menu start -->
                    </div>


                    <!-- product tab content start -->
                    <div class="tab-content" style="direction: ltr;">
                        <!-- product tab start -->
                        <div class="tab-pane fade active show" id="one">
                            <!-- categories features start -->
                            <div class="categories-features-wrapper">
                                <div class="ht-slick-slider-wrap">
                                    <div class="ht-slick-slider slick-row-15" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "speed": 1000, "arrows": true, "prevArrow": ".prev-meat", "nextArrow": ".next-meat", "responsive":[{"breakpoint":992, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1}}]}'>
                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-1.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                    <div class="product-label discount">
                                                        <span>-5%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور وحشی صید شده</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del></del></span>
                                                        <span class="price-regular">50.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-2.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label discount">
                                                        <span>-10%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">دانه های جعبه ای 8 کیلوگرمی مخلوط ارگانیک میوه و سبزیجات غیر</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>80.00 تومان</del></span>
                                                        <span class="price-regular">60.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-3.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">جعبه میوه و سبزیجات 8 کیلوگرمی ارگانیک میوه شور
                                                        </a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del></del></span>
                                                        <span class="price-regular">30.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-4.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                    <div class="product-label discount">
                                                        <span>-9%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">خانواده فیله ماهی آزاد میگوی سفید پرورش یافته در مزرعه کروگر</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>80.00 تومان</del></span>
                                                        <span class="price-regular">60.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-5.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                    <div class="product-label discount">
                                                        <span>-6%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور وحشی صید شده</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>80.00 تومان</del></span>
                                                        <span class="price-regular">60.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-6.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">تازه در حالی که صید استیک اره ماهی به وفور تازه است</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del></del></span>
                                                        <span class="price-regular">20.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->
                                    </div>
                                    <!-- Start Slider Navigation -->
                                    <div class="ht-slick-nav">
                                        <button class="prev-meat"><i class="ion-ios-arrow-left"></i></button>
                                        <button class="next-meat right"><i class="ion-ios-arrow-right"></i></button>
                                    </div>
                                    <!-- End Slider Navigation -->
                                </div>
                            </div>
                            <!-- categories features end -->
                        </div>
                        <!-- product tab start -->

                        <!-- product tab start -->
                        <div class="tab-pane fade" id="two">
                            <!-- categories features start -->
                            <div class="categories-features-wrapper">
                                <div class="ht-slick-slider-wrap">
                                    <div class="ht-slick-slider slick-row-15" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "speed": 1000, "arrows": true, "prevArrow": ".prev-two", "nextArrow": ".next-two", "responsive":[{"breakpoint":992, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1}}]}'>
                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-7.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                    <div class="product-label discount">
                                                        <span>-5%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور وحشی صید شده</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del></del></span>
                                                        <span class="price-regular">50.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-8.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label discount">
                                                        <span>-10%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">جعبه میوه و سبزیجات 8 کیلوگرمی ارگانیک میوه شور</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>80.00 تومان</del></span>
                                                        <span class="price-regular">60.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-9.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">دانه های جعبه ای 8 کیلوگرمی مخلوط ارگانیک میوه و سبزیجات غیر</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del></del></span>
                                                        <span class="price-regular">30.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-10.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                    <div class="product-label discount">
                                                        <span>-9%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">خانواده فیله ماهی آزاد میگوی سفید پرورش یافته در مزرعه کروگر</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>80.00 تومان</del></span>
                                                        <span class="price-regular">60.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-11.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                    <div class="product-label discount">
                                                        <span>-6%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور وحشی صید شده</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>70.00 تومان</del></span>
                                                        <span class="price-regular">30.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-12.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">تازه در حالی که صید استیک اره ماهی به وفور تازه است</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del></del></span>
                                                        <span class="price-regular">30.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->
                                    </div>
                                    <!-- Start Slider Navigation -->
                                    <div class="ht-slick-nav">
                                        <button class="prev-two"><i class="ion-ios-arrow-left"></i></button>
                                        <button class="next-two right"><i class="ion-ios-arrow-right"></i></button>
                                    </div>
                                    <!-- End Slider Navigation -->
                                </div>
                            </div>
                            <!-- categories features end -->
                        </div>
                        <!-- product tab start -->

                        <!-- product tab start -->
                        <div class="tab-pane fade" id="three">
                            <!-- categories features start -->
                            <div class="categories-features-wrapper">
                                <div class="ht-slick-slider-wrap">
                                    <div class="ht-slick-slider slick-row-15" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "speed": 1000, "arrows": true, "prevArrow": ".prev-three", "nextArrow": ".next-three", "responsive":[{"breakpoint":992, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1}}]}'>
                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-5.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور وحشی صید شده</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del></del></span>
                                                        <span class="price-regular">50.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-6.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                    <div class="product-label discount">
                                                        <span>-10%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">جعبه میوه و سبزیجات 8 کیلوگرمی ارگانیک میوه شور</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>80.00 تومان</del></span>
                                                        <span class="price-regular">60.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-11.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                    <div class="product-label discount">
                                                        <span>-5%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">
                                                            خانواده فیله ماهی آزاد میگوی سفید پرورش یافته در مزرعه کروگر</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>40.00 تومان</del></span>
                                                        <span class="price-regular">30.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-13.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                    <div class="product-label discount">
                                                        <span>-9%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور وحشی صید شده</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>60.00 تومان</del></span>
                                                        <span class="price-regular">40.00 تومان</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-12.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                    <div class="product-label discount">
                                                        <span>-6%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور وحشی صید شده</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$70.00</del></span>
                                                        <span class="price-regular">$90.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->

                                        <!-- single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="./assets/images/img/product/product-8.jpg" alt="">
                                                </a>
                                                <div class="add-to-links">
                                                    <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                                <div class="product-badge product-badge__2">
                                                    <div class="product-label new">
                                                        <span>جدید</span>
                                                    </div>
                                                    <div class="product-label discount">
                                                        <span>-10%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور وحشی صید شده</a></h5>
                                                    </div>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$40.00</del></span>
                                                        <span class="price-regular">$30.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single item end -->
                                    </div>
                                    <!-- Start Slider Navigation -->
                                    <div class="ht-slick-nav">
                                        <button class="prev-three"><i class="ion-ios-arrow-left"></i></button>
                                        <button class="next-three right"><i class="ion-ios-arrow-right"></i></button>
                                    </div>
                                    <!-- End Slider Navigation -->
                                </div>
                            </div>
                            <!-- categories features end -->
                        </div>
                        <!-- product tab start -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature categories area end -->

    <!-- banner statistics start -->
    <div class="banner-statistics-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-statistics">
                        <div class="img-container">
                            <a href="#">
                                <img src="./assets/images/img/banner/cms_1.6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner statistics end -->

    <!-- categories area start -->
    <div class="categories-area pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section header wrapper start -->
                    <div class="section-header-wrap">
                        <!-- section title start -->
                        <div class="section-title">
                            <h2>دسته بندی های ما</h2>
                        </div>
                        <!-- section title end -->

                        <!-- Start Slider Navigation -->
                        <div class="ht-slick-nav slick-append" style="direction: ltr;">
                            <button class="prev-recom"><i class="ion-ios-arrow-left"></i></button>
                            <button class="next-recom right"><i class="ion-ios-arrow-right"></i></button>
                        </div>
                        <!-- End Slider Navigation -->
                    </div>
                    <!-- section header wrapper end -->

                    <!-- categories wrapper start -->
                    <div class="categories-item-wrapper pt-30" style="direction: ltr">
                        <div class="ht-slick-slider-wrap">
                            <div class="ht-slick-slider slick-row-15" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "rows": 2, "speed": 1000, "prevArrow": ".prev-recom", "nextArrow": ".next-recom", "responsive":[{"breakpoint":992, "settings":{"slidesToShow": 3}}, {"breakpoint":768, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1, "rows": 1}}]}'>
                                <!-- categories item start -->
                                <div class="categories-item">
                                    <div class="categories-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/categories/cat-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="categories-content">
                                        <h5><a href="product-details.html">میوه ها و سبزیجات</a></h5>
                                        <p>13 محصول</p>
                                    </div>
                                </div>
                                <!-- categories item end -->

                                <!-- categories item start -->
                                <div class="categories-item">
                                    <div class="categories-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/categories/cat-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="categories-content">
                                        <h5><a href="product-details.html">لبنیات و تخم مرغ</a></h5>
                                        <p>10 محصول</p>
                                    </div>
                                </div>
                                <!-- categories item end -->

                                <!-- categories item start -->
                                <div class="categories-item">
                                    <div class="categories-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/categories/cat-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="categories-content">
                                        <h5><a href="product-details.html">خواربار</a></h5>
                                        <p>12 محصول</p>
                                    </div>
                                </div>
                                <!-- categories item end -->

                                <!-- categories item start -->
                                <div class="categories-item">
                                    <div class="categories-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/categories/cat-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="categories-content">
                                        <h5><a href="product-details.html">آب میوه تازه</a></h5>
                                        <p>8 محصول</p>
                                    </div>
                                </div>
                                <!-- categories item end -->

                                <!-- categories item start -->
                                <div class="categories-item">
                                    <div class="categories-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/categories/cat-5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="categories-content">
                                        <h5><a href="product-details.html">گوشت تازه</a></h5>
                                        <p>15 محصول</p>
                                    </div>
                                </div>
                                <!-- categories item end -->

                                <!-- categories item start -->
                                <div class="categories-item">
                                    <div class="categories-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/categories/cat-6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="categories-content">
                                        <h5><a href="product-details.html">منجمد
                                        </a></h5>
                                        <p>14 محصول</p>
                                    </div>
                                </div>
                                <!-- categories item end -->

                                <!-- categories item start -->
                                <div class="categories-item">
                                    <div class="categories-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/categories/cat-7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="categories-content">
                                        <h5><a href="product-details.html">وسایل آشپزخانه</a></h5>
                                        <p>11 محصول</p>
                                    </div>
                                </div>
                                <!-- categories item end -->

                                <!-- categories item start -->
                                <div class="categories-item">
                                    <div class="categories-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/categories/cat-8.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="categories-content">
                                        <h5><a href="product-details.html">آب میوه تازه</a></h5>
                                        <p>10 محصول</p>
                                    </div>
                                </div>
                                <!-- categories item end -->

                                <!-- categories item start -->
                                <div class="categories-item">
                                    <div class="categories-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/categories/cat-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="categories-content">
                                        <h5><a href="product-details.html">آب میوه تازه</a></h5>
                                        <p>8 محصول</p>
                                    </div>
                                </div>
                                <!-- categories item end -->

                                <!-- categories item start -->
                                <div class="categories-item">
                                    <div class="categories-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/categories/cat-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="categories-content">
                                        <h5><a href="product-details.html">لبنیات و تخم مرغ</a></h5>
                                        <p>10 محصول</p>
                                    </div>
                                </div>
                                <!-- categories item end -->
                            </div>
                        </div>
                    </div>
                    <!-- categories wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- categories area end -->

    <!-- product feature start -->
    <div class="product-feature-area pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header-wrap">
                        <!-- section title start -->
                        <div class="section-title">
                            <h2>گوشت تازه</h2>
                        </div>
                        <!-- section title end -->

                        <!-- Start Slider Navigation -->
                        <div class="ht-slick-nav slick-append" style="direction: ltr">
                            <button class="prev-four"><i class="ion-ios-arrow-left"></i></button>
                            <button class="next-four right"><i class="ion-ios-arrow-right"></i></button>
                        </div>
                        <!-- End Slider Navigation -->
                    </div>

                    <!-- categories features start -->
                    <div class="categories-features-wrapper" style="direction: ltr">
                        <div class="ht-slick-slider-wrap">
                            <div class="ht-slick-slider slick-row-15" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "speed": 1000, "arrows": true, "prevArrow": ".prev-four", "nextArrow": ".next-four", "responsive":[{"breakpoint":992, "settings":{"slidesToShow": 3}}, {"breakpoint":768, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1}}]}'>
                                <!-- single item start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-5.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                        <div class="product-badge product-badge__2">
                                            <div class="product-label new">
                                                <span>جدید</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور وحشی صید شده</a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del></del></span>
                                                <span class="price-regular">50.00 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-6.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                        <div class="product-badge product-badge__2">
                                            <div class="product-label new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="product-label discount">
                                                <span>-10%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">دانه های جعبه ای 8 کیلوگرمی مخلوط ارگانیک میوه و سبزیجات غیر </a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del>80.00 تومان</del></span>
                                                <span class="price-regular">60.00 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-11.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                        <div class="product-badge product-badge__2">
                                            <div class="product-label new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="product-label discount">
                                                <span>-5%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">جعبه میوه و سبزیجات 8 کیلوگرمی ارگانیک میوه شور
                                                </a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del>80.00 تومان</del></span>
                                                <span class="price-regular">60.00 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-13.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                        <div class="product-badge product-badge__2">
                                            <div class="product-label new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="product-label discount">
                                                <span>-9%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">خانواده فیله ماهی آزاد میگوی سفید پرورش یافته در مزرعه کروگر</a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del>80.00 تومان</del></span>
                                                <span class="price-regular">60.00 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-12.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                        <div class="product-badge product-badge__2">
                                            <div class="product-label new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="product-label discount">
                                                <span>-6%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور وحشی صید شده</a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del>70.00 تومان</del></span>
                                                <span class="price-regular">90.00 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="./assets/images/img/product/product-8.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </div>
                                        <div class="product-badge product-badge__2">
                                            <div class="product-label new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="product-label discount">
                                                <span>-10%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">تازه در حالی که صید استیک اره ماهی به وفور تازه است</a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del>40.00 تومان</del></span>
                                                <span class="price-regular">60.00 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->
                            </div>
                        </div>
                    </div>
                    <!-- categories features end -->
                </div>
            </div>
        </div>
    </div>
    <!-- product feature end -->

    <!-- banner statistics start -->
    <div class="banner-statistics-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-statistics">
                        <div class="img-container">
                            <a href="#">
                                <img src="./assets/images/img/banner/cms_1.7.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner statistics end -->

    <!-- brand area start -->
    <div class="brand-area pt-40 pb-40" style="direction: ltr">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-item-wrapper">
                        <div class="ht-slick-slider-wrap">
                            <div class="ht-slick-slider slick-row-15" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "speed": 1000, "arrows": false, "autoplay": true, "responsive":[{"breakpoint":992, "settings":{"slidesToShow": 3}}, {"breakpoint":768, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1}}]}'>
                                <!-- brand item start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="./assets/images/img/brand/1.jpg" alt="">
                                    </a>
                                </div>
                                <!-- brand item end -->

                                <!-- brand item start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="./assets/images/img/brand/2.jpg" alt="">
                                    </a>
                                </div>
                                <!-- brand item end -->

                                <!-- brand item start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="./assets/images/img/brand/3.jpg" alt="">
                                    </a>
                                </div>
                                <!-- brand item end -->

                                <!-- brand item start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="./assets/images/img/brand/4.jpg" alt="">
                                    </a>
                                </div>
                                <!-- brand item end -->

                                <!-- brand item start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="./assets/images/img/brand/5.jpg" alt="">
                                    </a>
                                </div>
                                <!-- brand item end -->

                                <!-- brand item start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="./assets/images/img/brand/6.jpg" alt="">
                                    </a>
                                </div>
                                <!-- brand item end -->

                                <!-- brand item start -->
                                <div class="brand-item">
                                    <a href="#">
                                        <img src="./assets/images/img/brand/7.jpg" alt="">
                                    </a>
                                </div>
                                <!-- brand item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end -->

    <!-- recommended area start -->
    <div class="recommended-area pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header-wrap">
                        <!-- section title start -->
                        <div class="section-title">
                            <h2>توصیه شده</h2>
                        </div>
                        <!-- section title end -->

                        <!-- Start Slider Navigation -->
                        <div class="ht-slick-nav slick-append" style="direction: ltr">
                            <button class="prev-rec"><i class="ion-ios-arrow-left"></i></button>
                            <button class="next-rec right"><i class="ion-ios-arrow-right"></i></button>
                        </div>
                        <!-- End Slider Navigation -->
                    </div>

                    <!-- recommended wrapper start -->
                    <div class="recommended-wrapper"style="direction: ltr">
                        <div class="ht-slick-slider-wrap">
                            <div class="ht-slick-slider slick-row-15" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "rows": 2, "speed": 1000, "arrows": true, "prevArrow": ".prev-rec", "nextArrow": ".next-rec", "responsive":[{"breakpoint":992, "settings":{"slidesToShow": 2}}, {"breakpoint":768, "settings":{"slidesToShow": 1}}, {"breakpoint":480, "settings":{"slidesToShow": 1, "rows": 1}}]}'>
                                <!-- recommend item start -->
                                <div class="recommend-item-inner">
                                    <div class="product-recommend-item">
                                        <div class="recommend-thumb">
                                            <a href="product-details.html">
                                                <img src="./assets/images/img/product/product-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="recommend-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">کنسرو توت فرنگی </a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del></del></span>
                                                <span class="price-regular">50.000 تومان</span>
                                            </div>
                                            <div class="add-to-links">
                                                <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recommend item end -->

                                <!-- recommend item start -->
                                <div class="recommend-item-inner">
                                    <div class="product-recommend-item">
                                        <div class="recommend-thumb">
                                            <a href="product-details.html">
                                                <img src="./assets/images/img/product/product-7.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="recommend-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">کنسرو توت فرنگی </a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del></del></span>
                                                <span class="price-regular">50.000 تومان</span>
                                            </div>
                                            <div class="add-to-links">
                                                <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recommend item end -->

                                <!-- recommend item start -->
                                <div class="recommend-item-inner">
                                    <div class="product-recommend-item">
                                        <div class="recommend-thumb">
                                            <a href="product-details.html">
                                                <img src="./assets/images/img/product/product-8.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="recommend-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">کنسرو توت فرنگی </a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del></del></span>
                                                <span class="price-regular">50.000 تومان</span>
                                            </div>
                                            <div class="add-to-links">
                                                <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recommend item end -->

                                <!-- recommend item start -->
                                <div class="recommend-item-inner">
                                    <div class="product-recommend-item">
                                        <div class="recommend-thumb">
                                            <a href="product-details.html">
                                                <img src="./assets/images/img/product/product-9.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="recommend-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">کنسرو توت فرنگی </a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del></del></span>
                                                <span class="price-regular">50.000 تومان</span>
                                            </div>
                                            <div class="add-to-links">
                                                <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recommend item end -->

                                <!-- recommend item start -->
                                <div class="recommend-item-inner">
                                    <div class="product-recommend-item">
                                        <div class="recommend-thumb">
                                            <a href="product-details.html">
                                                <img src="./assets/images/img/product/product-10.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="recommend-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">کنسرو توت فرنگی </a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del></del></span>
                                                <span class="price-regular">50.000 تومان</span>
                                            </div>
                                            <div class="add-to-links">
                                                <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recommend item end -->

                                <!-- recommend item start -->
                                <div class="recommend-item-inner">
                                    <div class="product-recommend-item">
                                        <div class="recommend-thumb">
                                            <a href="product-details.html">
                                                <img src="./assets/images/img/product/product-11.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="recommend-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">کنسرو توت فرنگی </a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del></del></span>
                                                <span class="price-regular">50.000 تومان</span>
                                            </div>
                                            <div class="add-to-links">
                                                <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recommend item end -->

                                <!-- recommend item start -->
                                <div class="recommend-item-inner">
                                    <div class="product-recommend-item">
                                        <div class="recommend-thumb">
                                            <a href="product-details.html">
                                                <img src="./assets/images/img/product/product-12.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="recommend-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">کنسرو توت فرنگی </a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del></del></span>
                                                <span class="price-regular">50.000 تومان</span>
                                            </div>
                                            <div class="add-to-links">
                                                <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recommend item end -->

                                <!-- recommend item start -->
                                <div class="recommend-item-inner">
                                    <div class="product-recommend-item">
                                        <div class="recommend-thumb">
                                            <a href="product-details.html">
                                                <img src="./assets/images/img/product/product-13.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="recommend-content">
                                            <div class="product-name">
                                                <h5><a href="product-details.html">کنسرو توت فرنگی</a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del></del></span>
                                                <span class="price-regular">50.000 تومان</span>
                                            </div>
                                            <div class="add-to-links">
                                                <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i class="ion-bag"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span></a>
                                                <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recommend item end -->
                            </div>
                        </div>
                    </div>
                    <!-- recommended wrapper start -->
                </div>
            </div>
        </div>
    </div>
    <!-- recommended area end -->

</main>
@endsection
