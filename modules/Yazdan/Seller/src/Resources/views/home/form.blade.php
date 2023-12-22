{{-- <form action="{{ route('address.store') }}" method="POST"> --}}
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <x-input-home name="name" label="نام و نام خانوادگی" value="{{$address->name ?? old('name')}}"/>
        </div>
        <div class="col-lg-6">
            <x-input-home type="tel" name="phone" label="شماره تماس" value="{{$address->phone ?? old('phone')}}"/>
        </div>
    </div>

    <x-input-home type="number" name="postal_code" label="کد پستی" value="{{$address->postal_code ?? old('postal_code')}}"/>

    <x-textarea-home name="address" label="آدرس" value="{{$address->address ?? old('address')}}" />


    <div class="single-input-item">
        <button type="submit" class="btn btn__bg">ثبت</button>
    </div>
{{-- </form> --}}
