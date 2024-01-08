@extends('Front::master')
@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li>
                                <li class="breadcrumb-item"><a href="product-details.html">فروشگاه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">جزئیات محصول</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper pt-40">
        <div class="container">
            <div class="row">
                <!-- product details wrapper start -->
                <div class="col-lg-12 order-1 order-lg-2">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider img-zoom mb-20" style="direction: ltr">
                                    <div class="pro-large-img">
                                        <img src="{{$product->getImage(600)}}" alt="" />
                                    </div>
                                    @foreach ($product->galleries as $gallery)

                                    <div class="pro-large-img">
                                        <img src="{{$gallery->getImage(600)}}" alt="" />
                                    </div>
                                    @endforeach

                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style" style="direction: ltr">
                                    <div class="pro-large-img">
                                        <img src="{{$product->getImage(600)}}" alt="" />
                                    </div>
                                    @foreach ($product->galleries as $gallery)
                                    <div class="pro-nav-thumb">
                                        <img src="{{$gallery->getImage(600)}}" alt="" />
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-lg-7">
                                <form action="{{route('checkout')}}">
                                    <div class="product-details-des">
                                        <h5 class="product-name"><a href="product-details.html">{{$product->title}}</a></h5>
                                        <div class="ratings">
                                            <div class="pro-review">
                                                <span>1 نظر</span>
                                            </div>
                                        </div>
                                        @include('Product::front.productPrice')
                                        <p>{!! $product->description !!}</p>

                                        @if ($product->variations->isNotEmpty())
                                        <div class="pro-size mb-26 mt-26">
                                            <h5>نوع :</h5>
                                            <select name="variation" class="form-control w-50 variation-select">
                                                @foreach ($product->variations as $variation)
                                                <option
                                                    value="{{ json_encode($variation->only(['id','quantity','is_sale' , 'price2' , 'price'])) }}">
                                                    {{$variation->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input name="quantity" type="text" value="1">
                                                </div>
                                            </div>
                                            <div class="action_link">
                                                <button class="buy-btn" type="submit"><i class="ion-bag"></i>سفارش محصول</button>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->

                    <!-- product details reviews start -->
                    <div class="product-details-reviews pt-32">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li>
                                            <a class="active" data-bs-toggle="tab" href="#tab_one">شرح</a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tab" href="#tab_three">نظر (1)</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="tab_one">
                                            <div class="tab-one">
                                                <p>{!! $product->body !!}</p>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_three">
                                            <form action="#" class="review-form">
                                                <h5>
                                                    1 بررسی برای<span>چاز کانگرو</span></h5>
                                                <div class="total-reviews">
                                                    <div class="rev-avatar">
                                                        <img src="files/images/img/about/avatar.jpg" alt="">
                                                    </div>
                                                    <div class="review-box">
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                        </div>
                                                        <div class="post-author">
                                                            <p><span>مدیر -</span>24 آیان 1402</p>
                                                        </div>
                                                        <p>گوشت نام یک ماده آلی است که در بدن بیشتر جانوران وجود دارد.
                                                            انسان‌ها گوشت جانورانی همچون گاو، گوسفند، خوک، بوقلمون، مرغ
                                                            و غاز را می‌خورند. گوشت بیشتر همراه استخوان و کمی چربی است و
                                                            سرشار از پروتئین می‌باشد. </p>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            نام کاربری</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            ایمیل شما</label>
                                                        <input type="email" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            نقد شما</label>
                                                        <textarea class="form-control" required></textarea>
                                                        <div class="help-block pt-10"><span class="text-danger">توجه
                                                                داشته باشید:</span>
                                                            HTML ترجمه نشده است!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            رتبه بندی</label>
                                                        &nbsp;&nbsp;&nbsp; بد&nbsp;
                                                        <input type="radio" value="1" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="2" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="3" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="4" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="5" name="rating" checked>
                                                        &nbsp;خوب
                                                    </div>
                                                </div>
                                                <div class="buttons">
                                                    <button class="sqr-btn" type="submit">ادامه</button>
                                                </div>
                                            </form> <!-- end of review-form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details reviews end -->
                </div>
                <!-- product details wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->

    <!-- product feature start -->
    <div class="related-product pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header-wrap">
                        <!-- section title start -->
                        <div class="section-title">
                            <h2>محصولات مرتبط</h2>
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
                    <div class="categories-features-wrapper">
                        <div class="ht-slick-slider-wrap" style="direction: ltr">
                            <div class="ht-slick-slider slick-row-15"
                                data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "speed": 1000, "arrows": true, "prevArrow": ".prev-four", "nextArrow": ".next-four", "responsive":[{"breakpoint":992, "settings":{"slidesToShow": 3}}, {"breakpoint":768, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1}}]}'>
                                <!-- single item start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="files/images/img/product/product-5.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                    class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                    data-bs-toggle="tooltip" title="Quick View"><i
                                                        class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
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
                                                <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور
                                                        وحشی صید شده</a></h5>
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
                                            <img src="files/images/img/product/product-6.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                    class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                    data-bs-toggle="tooltip" title="Quick View"><i
                                                        class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
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
                                                <h5><a href="product-details.html"> کیلوگرمی مخلوط ارگانیک میوه و
                                                        سبزیجات غیر </a></h5>
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
                                            <img src="files/images/img/product/product-11.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                    class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                    data-bs-toggle="tooltip" title="Quick View"><i
                                                        class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
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
                                                <h5><a href="product-details.html">جعبه میوه و سبزیجات 8 کیلوگرمی
                                                        ارگانیک میوه شور</a></h5>
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
                                            <img src="files/images/img/product/product-13.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                    class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                    data-bs-toggle="tooltip" title="Quick View"><i
                                                        class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
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
                                                <h5><a href="product-details.html">خانواده فیله ماهی آزاد میگوی سفید
                                                        پرورش یافته در مزرعه کروگر</a></h5>
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
                                            <img src="files/images/img/product/product-12.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                    class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                    data-bs-toggle="tooltip" title="Quick View"><i
                                                        class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
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
                                                <h5><a href="product-details.html">انتخاب خصوصی خرچنگ توده‌ای ادم‌جور
                                                        وحشی صید شده</a></h5>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                                <span><i class="ion-android-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="price-old"><del>90.00 تومان</del></span>
                                                <span class="price-regular">70.00 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="files/images/img/product/product-8.jpg" alt="">
                                        </a>
                                        <div class="add-to-links">
                                            <a href="cart.html" data-bs-toggle="tooltip" title="Add to Cart"><i
                                                    class="ion-bag"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                    data-bs-toggle="tooltip" title="Quick View"><i
                                                        class="ion-ios-eye-outline"></i></span></a>
                                            <a href="wishlist.html" data-bs-toggle="tooltip" title="Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
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
                                                <h5><a href="product-details.html">تازه در حالی که صید استیک اره ماهی به
                                                        وفور تازه است</a></h5>
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
                            </div>
                        </div>
                    </div>
                    <!-- categories features end -->
                </div>
            </div>
        </div>
    </div>
    <!-- product feature end -->
</main>
@endsection
