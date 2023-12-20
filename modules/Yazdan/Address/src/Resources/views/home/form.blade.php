{{-- <form action="{{ route('address.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <x-input-home type="text" name="name" label="نام و نام خانوادگی" value="{{$address->name ?? old('name')}}">
                <i data-feather="user" class="fea icon-sm icons"></i>
            </x-input-home>
        </div>
        <div class="col-md-6">
            <x-input-home type="tel" name="phone" label="شماره تماس" value="{{$address->phone ?? old('phone')}}">
                <i data-feather="user" class="fea icon-sm icons"></i>
            </x-input-home>
        </div>
        <div class="col-md-12">
            <x-textarea-home name="address" label="آدرس" value="{{$address->address ?? old('address')}}">
                <i data-feather="user" class="fea icon-sm icons"></i>
            </x-textarea-home>
        </div>
        <div class="col-md-6">
            <x-select-home name="province_id" label="استان" class="province-select">
                @foreach ($provinces as $province)
                <option {{ $address !=null && $province->id == $address->province_id ? 'selected' : '' }} value="{{
                    $province->id }}">{{ $province->name }}</option>
                @endforeach
            </x-select-home>
        </div>
        <div class="col-md-6">
            <x-select-home name="city_id" label="شهر" class="city-select">
                @if ($address != null)
                <option value="{{ $address->city_id }}" selected>
                    {{ $address->city->name }}
                </option>
                @endif
            </x-select-home>
        </div>
        <div class="col-md-6">
            <x-input-home type="number" name="postal_code" label="کد پستی"
                value="{{$address->postal_code ?? old('postal_code')}}">
                <i data-feather="user" class="fea icon-sm icons"></i>
            </x-input-home>
        </div>
        <div class="col-md-12">
            <button class="btn btn-primary" type="submit"> ثبت آدرس
            </button>
        </div>
    </div>
</form> --}}

<form action="{{ route('address.store') }}" method="POST">
    <div class="row">
        <div class="col-lg-6">
            <div class="single-input-item">
                <label for="name" class="required">نام و نام خانوادگی</label>
                <input type="text" id="name" name="name" placeholder="نام و نام خانوادگی"
                    value="{{$address->name ?? old('name')}}" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="single-input-item">
                <label for="phone" class="required">شماره تماس</label>
                <input type="tel" id="phone" name="phone" placeholder="شماره تماس"
                    value="{{$address->phone ?? old('phone')}}" />
            </div>
        </div>
    </div>
    <div class="single-input-item">
        <label for="postal_code" class="required">کد پستی</label>
        <input type="number" id="postal_code" name="postal_code" placeholder="کد پستی"
            value="{{$address->postal_code ?? old('postal_code')}}" />
    </div>
    <div class="single-input-item">
        <label for="address" class="required">آدرس</label>
        <textarea name="address" id="address" placeholder="آدرس"
            rows="4">{{$address->address ?? old('address')}}</textarea>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="single-input-item">
                <label for="province_id" class="required">استان</label>
                <select name="province_id" class="province-select">
                    @foreach ($provinces as $province)
                    <option {{ $address !=null && $province->id == $address->province_id ? 'selected' : '' }} value="{{
                        $province->id }}">{{ $province->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="single-input-item city-select">
                <label for="city_id" class="required">شهر</label>
                <select name="city_id" id="city_id">
                    @if ($address != null)
                        <option value="{{ $address->city_id }}" selected>
                            {{ $address->city->name }}
                        </option>
                    @endif
                </select>
            </div>
        </div>
    </div>
    <div class="single-input-item">
        <button type="submit" class="btn btn__bg">ثبت</button>
    </div>
</form>

@section('script')
<script>
    $('.province-select').change(function() {
            var provinceID = $(this).val();
            if (provinceID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('/get-province-cities-list') }}?province_id=" + provinceID,
                    success: function(res) {
                        console.log($(".city-select select").html);
                        if (res) {
                            $(".city-select select").empty();

                            $.each(res, function(key, city) {
                                $(".city-select select").append('<option value="' + city.id + '">' +
                                    city.name + '</option>');
                            });

                        } else {
                            $(".city-select select").empty();
                        }
                    }
                });
            } else {
                $(".city-select select").empty();
            }
        });
</script>
@endsection
