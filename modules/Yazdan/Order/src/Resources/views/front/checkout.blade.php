@extends('Front::master')
@section('content')

<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li>
                                <li class="breadcrumb-item"><a href="product-details.html">فروشگاه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">جزئیات محصول</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start -->
    <section class="section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="rounded shadow p-4">
                        <h5 class="mb-0">جزئیات صورتحساب :</h5>
                        <div class="mt-4">
                            @include('Address::home.form')
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="order-summary-details">
                        <h2>خلاصه سفارش شما</h2>
                        <div class="order-summary-content">
                            <!-- Order Summary Table -->
                            <div class="order-summary-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>محصولات</th>
                                            <th>جمع</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>محصول</td>
                                            <td><a
                                                    href="{{$variation->product->path()}}">{{$variation->product->title}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>نوع</td>
                                            <td>{{$variation->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>قیمت</td>
                                            <td>{{number_format($variation->price)}} تومان</td>
                                        </tr>
                                        <tr>
                                            <td>تعداد</td>
                                            <td>{{$quantity}}</td>
                                        </tr>
                                        @if ($variation->price2 != null)

                                        <tr class="text-red">
                                            <td>قیمت با تخفیف</td>
                                            <td>{{number_format($variation->price2)}} تومان</td>
                                        </tr>
                                        <tr class="text-red">
                                            <td>ملبغ تخفیف</td>
                                            <td>{{number_format($variation->price - $variation->price2)}} تومان</td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <td>مقدار کل</td>
                                            <td><strong>{{number_format($variation->getPrice() * $quantity)}} تومان</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Order Payment Method -->
                            <div class="order-payment-method">
                                <form action="{{route('buy')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="variation_id" value="{{$variation->id}}">
                                    <input type="hidden" name="quantity" value="{{$quantity}}">
                                <div class="summary-footer-area ">
                                    <button type="submit" class="btn btn__bg">ثبت سفارش</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
</main>
@endsection
