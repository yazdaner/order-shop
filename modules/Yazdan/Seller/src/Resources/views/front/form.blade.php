<form action="{{ route('sellers.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <x-input-home name="seller_name" label="نام و نام خانوادگی" />
        </div>
        <div class="col-lg-6">
            <x-input-home name="shop_name" label="نام فروشگاه" />
        </div>
    </div>
    <x-input-home name="slug" label="نام فروشگاه به انگلیسی" />

    <div class="row">
        <div class="col-lg-6">
            <x-input-home type="tel" name="mobile" label="شماره ثابت" />
        </div>
        <div class="col-lg-6">
            <x-input-home type="number" name="national_number" label="کد ملی" />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <x-input-home type="number" name="card_number" label="شماره حساب" />
        </div>
        <div class="col-lg-6">
            <x-input-home name="sheba_number" label="شماره شبا" />
        </div>
    </div>

    <x-input-home type="number" name="postal_code" label="کد پستی" />
    <x-textarea-home name="address" label="آدرس" />

    <x-textarea-home name="description" label="زمینه کاری" />


    <div class="single-input-item">
        <button type="submit" class="btn btn__bg">ثبت</button>
    </div>
</form>
