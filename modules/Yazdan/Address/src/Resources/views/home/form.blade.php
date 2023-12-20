<form action="{{ route('address.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="single-input-item">
                <label for="name" class="required">نام و نام خانوادگی</label>
                <input type="text" id="name" name="name" placeholder="نام و نام خانوادگی"
                    value="{{$address->name ?? old('name')}}" />
            </div>
            <x-input-home name="name"/>
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
                <select name="province_id" class="form-select province-select">
                    @foreach ($provinces as $province)
                    <option {{ $address !=null && $province->id == $address->province_id ? 'selected' : '' }} value="{{
                        $province->id }}">{{ $province->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="single-input-item">
                <label for="city_id" class="required">شهر</label>
                <select name="city_id" id="city_id" class="form-select city-select">
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
                        if (res) {
                            $(".city-select").empty();
                            $.each(res, function(key, city) {
                                $(".city-select").append('<option value="' + city.id + '">' +
                                    city.name + '</option>');
                            });
                        } else {
                            $(".city-select").empty();
                        }
                    }
                });
            } else {
                $(".city-select").empty();
            }
        });
</script>
@endsection
