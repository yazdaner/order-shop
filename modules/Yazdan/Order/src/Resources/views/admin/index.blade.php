@extends('Dashboard::master')
@section('breadcrumb')
    <li><a href="#" title="محصولات خریداری شده">محصولات خریداری شده</a></li>
@endsection
@section('content')
<div class="main-content padding-0">
    <div class="row no-gutters">
        <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
            <div class="justify-content-between box__title pb-4">
                <h3 class="btn">محصولات خریداری شده</h3>
            </div>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>بنر</th>
                            <th>عنوان</th>
                            <th>تاریخ خرید</th>
                            <th>مبلغ پرداختی</th>
                            <th>تعداد</th>
                            <th>شناسه پرداخت</th>
                            <th>نام کاربر</th>
                            <th>آدرس</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            @include("Order::admin.address")
        </div>
    </div>
</div>
@endsection
@section('style')
    <link rel="stylesheet" href="../panel/css/modal.css">
@endsection
@section('script')
<script src="../panel/js/modal.js"></script>
<script>
    function showComment(e,address,province,city){
        e.preventDefault();
        let data = JSON.parse(address);
        $("#ShowComment .name").text(data.name);
        $("#ShowComment .address").text(data.address);
        $("#ShowComment .phone").text(data.phone);
        $("#ShowComment .postal_code").text(data.postal_code);
        $("#ShowComment .province").text(province);
        $("#ShowComment .city").text(city);
    }
</script>
@endsection
