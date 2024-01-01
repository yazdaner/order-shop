@extends('Dashboard::master')
@section('breadcrumb')
<li><a href="{{ route('admin.sellers.index') }}" title="فروشندگان">فروشندگان</a></li>
@endsection
@section('content')
<div class="main-content padding-0 users">
    <div class="row no-gutters">
        <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
            <p class="box__title">فروشندگان</p>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>نام فروشگاه</th>
                            <th>نام فروشنده</th>
                            <th>موبایل</th>
                            <th>اسلاگ</th>
                            <th>وضعیت</th>
                            <th>اطلاعات بیشتر</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sellers as $seller)
                        <tr role="row" class="">
                            <td><a href="">{{ $seller->id }}</a></td>
                            <td>{{ $seller->shop_name }}</td>
                            <td>{{ $seller->seller_name }}</td>
                            <td>{{ $seller->mobile }}</td>
                            <td>{{ $seller->slug }}</td>
                            <td class="confirmation_status {{ $seller->getStatusCssClass() }}">@lang($seller->status)</td>

                            <td><a class="btn-show btn btn-yazdan" href="#rolesModal" rel="modal:open" onclick="showSeller(event,'{{json_encode($seller)}}')">نمایش</a></td>

                            <td>

                                <a href="" onclick="deleteItem(event, '{{ route('admin.sellers.destroy', $seller->id) }}')" class="item-delete mlg-15" title="حذف"></a>
                                <a href="{{route('admin.sellers.edit',$seller->id)}}" class="item-edit mlg-10" title="ویرایش"></a>
                                <a href="" onclick="UpdateConfirmationStatus(event, '{{ route('admin.sellers.accept', $seller->id) }}','تایید شده','آیا از تایید این آیتم اطمینان دارید؟')"
                                    class="item-confirm mlg-15" title="تایید"></a>
                                 <a href="" onclick="UpdateConfirmationStatus(event, '{{ route('admin.sellers.reject', $seller->id) }}' ,'رد شده','آیا از رد این آیتم اطمینان دارید؟')"
                                    class="item-reject mlg-15" title="رد"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include("Seller::admin.sellers")
        </div>
    </div>
</div>
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('panel/css/modal.css')}}">
@endsection
@section('script')
<script src="{{asset('panel/js/modal.js')}}"></script>
<script>
    function showSeller(e,seller){
        e.preventDefault();
        let data = JSON.parse(seller);
        $("#showSeller .national_number").text(data.national_number);
        $("#showSeller .card_number").text(data.card_number);
        $("#showSeller .sheba_number").text(data.sheba_number);
        $("#showSeller .description").text(data.description);
        $("#showSeller .postal_code").text(data.postal_code);
        $("#showSeller .address").text(data.address);
    }
</script>
@endsection
