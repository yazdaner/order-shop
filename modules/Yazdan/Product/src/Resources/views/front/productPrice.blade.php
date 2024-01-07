<div class="price-box">
    @if($product->quantity_check)
    @if($product->sale_check)
    <span class="price-old">
        {{ number_format($product->sale_check->price) }}
        تومان
    </span>
    <span class="price-regular">
        {{ number_format($product->sale_check->price2) }}
        تومان
    </span>
    @else
    <span class="price-regular">
        {{ number_format($product->price_check->price) }}
        تومان
    </span>
    @endif
    @else
    <div class="not-in-stock">
        <p class="mt-2">ناموجود</p>
    </div>
    @endif
</div>

