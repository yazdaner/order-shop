@if ($banner != null)
<div class="banner-statistics-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-statistics">
                    <div class="img-container">
                        <a href="{{$banner->link}}">
                            <img src="{{$banner->getImage()}}" alt="{{$banner->title}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
