@extends('Home::master')
@section('homeContent')
<div class="row">
    <h3 class="">مشخصات فروشنده</h3>
    <div class="col-md-6 mb-3">
        <div class="label">کد ملی</div>
        <input type="text" disabled class="form-control" value="{{$seller->national_number}}">
    </div>
    <div class="col-md-6 mb-3">
        <div class="label">شماره حساب</div>
        <input type="text" disabled class="form-control" value="{{$seller->card_number}}">
    </div>
    <div class="col-md-6 mb-3">
        <div class="label">شماره شبا </div>
        <input type="text" disabled class="form-control" value="{{$seller->sheba_number}}">
    </div>
    <div class="col-md-6 mb-3">
        <div class="label">کد پستی</div>
        <input type="text" disabled class="form-control" value="{{$seller->postal_code}}">
    </div>
    <div class="col-md-6 mb-3">
        <div class="label">زمینه کاری</div>
        <textarea type="text" disabled class="form-control">{{$seller->description}}</textarea>
    </div>
    <div class="col-md-6 mb-3">
        <div class="label">آدرس</div>
        <textarea type="text" disabled class="form-control">{{$seller->address}}</textarea>
    </div>
</div>
@endsection
