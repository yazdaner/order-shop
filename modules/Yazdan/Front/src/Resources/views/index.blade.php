@extends('Front::master')
@section('content')
<main>

    {{-- @include('Front::sections.slider') --}}
    {{-- @include('Front::sections.banner-feature') --}}
    {{-- @include('Front::sections.feature-categories') --}}

    {{-- @include('Front::sections.feature-categories-2') --}}

    @include('Front::sections.middleBanner')

    {{-- @include('Front::sections.categories') --}}
    @include('Front::sections.products')

    @include('Front::sections.bottomBanner')
    {{-- @include('Front::sections.recommended') --}}


</main>
@endsection
