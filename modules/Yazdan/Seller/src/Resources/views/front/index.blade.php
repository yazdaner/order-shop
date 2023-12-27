@extends('Front::master')

@section('content')
<main>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">صحه اصلی</a></li>
                                <li class="breadcrumb-item active" aria-current="page">فروشنده شوید</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12 my-5">
                <h3> فروشنده شوید </h3>
                <div class="mt-4">
                    @include('Seller::front.form')
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
