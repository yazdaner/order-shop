<div class="col-4 p-0">
    <strong>ایجاد متغییر های محصول جدید</strong>
    <form action="{{route('home.variations.store')}}" method="post" class="padding-30">
        @csrf
        <input name="product_id" type="hidden" value="{{$product->id}}"/>
        <x-input-home name="title" type="text" label="عنوان" />
        <x-input-home name="quantity" type="number" label="تعداد" />
        <x-input-home name="price" type="number" label="قیمت" />
        <x-input-home name="price2" type="number" label="قیمت ویژه" />
        <x-input-home name="sku" type="text" label="شناسه انبارداری" />

        <button type="submit" class="btn btn-yazdan">اضافه کردن</button>
    </form>
</div>
