<form action="{{ route('address.store') }}" method="POST">
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
