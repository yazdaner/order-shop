@if ($sliders->isNotEmpty())
 <div class="hero-slider-wrapper mt-30" style="direction: ltr">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="hero-slider-active slick-dot-style">
                    @foreach ($sliders as $slider)
                        <div class="hero-item-inner">
                            <div class="hero-slider-item d-flex align-items-center bg-img" data-bg="{{$slider->getImage()}}">
                                <div class="hero-slider-content" style="direction: rtl;">
                                    <h1>{{$slider->title}}</h1>
                                    <h4>{{$slider->description}}</h4>
                                    <a href="{{$slider->link}}" class="btn btn-slider">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
