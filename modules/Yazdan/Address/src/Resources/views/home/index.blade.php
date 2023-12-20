@extends('Home::master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('address')}}">آدرس</a></li>
@endsection
@section('homeContent')
<h3> آدرس </h3>
<div class="mt-4">
    @include('Address::home.form')
</div>
@endsection
