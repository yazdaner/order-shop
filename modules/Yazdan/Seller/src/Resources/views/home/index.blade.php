@extends('Home::master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('address')}}">آدرس</a></li>
@endsection
@section('homeContent')
<h3> فروشنده </h3>
<div class="mt-4">
    @include('Seller::home.form')
</div>
@endsection
