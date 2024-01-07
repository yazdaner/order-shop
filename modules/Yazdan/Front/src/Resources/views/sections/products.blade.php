<div class="product-feature-area pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header-wrap">
                    <div class="section-title">
                        <h2>گوشت تازه</h2>
                    </div>
                    <div class="ht-slick-nav slick-append" style="direction: ltr">
                        <button class="prev-four"><i class="ion-ios-arrow-left"></i></button>
                        <button class="next-four right"><i class="ion-ios-arrow-right"></i></button>
                    </div>
                </div>
                <div class="categories-features-wrapper" style="direction: ltr">
                    <div class="ht-slick-slider-wrap">
                        <div class="ht-slick-slider slick-row-15"
                            data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "speed": 1000, "arrows": true, "prevArrow": ".prev-four", "nextArrow": ".next-four", "responsive":[{"breakpoint":992, "settings":{"slidesToShow": 3}}, {"breakpoint":768, "settings":{"slidesToShow": 2}}, {"breakpoint":480, "settings":{"slidesToShow": 1}}]}'>
                            @foreach ($products as $product)
                                @include('Product::front.singleProduct')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
