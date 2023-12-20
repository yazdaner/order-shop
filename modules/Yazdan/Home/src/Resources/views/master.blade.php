@extends('Front::master')
@section('content')
<main>
   @include('Home::sections.breadcrumb')
    <div class="my-account-wrapper pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="myaccount-page-wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                @include('Home::sections.sidebar')
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">

                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                             @yield('homeContent')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
