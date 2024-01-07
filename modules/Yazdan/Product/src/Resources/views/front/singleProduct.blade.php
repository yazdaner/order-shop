
{{-- @include('Product::front.productPrice') --}}


<div class="product-item">
    <div class="product-thumb">
        <a href="{{$product->path()}}">
            <img src="{{$product->getImage(600)}}" alt="{{$product->title}}">
        </a>
    </div>
    <div class="product-badge product-badge__2">
        <div class="product-label new">
            <span>{{$product->category->title}}</span>
        </div>
    </div>
    <div class="product-content">
        <div class="product-content">
            <div class="product-name">
                <h5><a href="{{$product->path()}}">{{$product->title}}</a></h5>
            </div>
            @include('Product::front.productPrice')
        </div>
    </div>
</div>
