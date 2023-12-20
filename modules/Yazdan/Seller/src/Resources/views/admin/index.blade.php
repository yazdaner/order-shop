@extends('Dashboard::master')
@section('breadcrumb')
<li><a href="{{ route('admin.sellers.index') }}" title="اسلاید ها">اسلاید ها</a></li>
@endsection
@section('content')
<div class="main-content padding-0 users">
    <div class="row no-gutters">
        <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
            <p class="box__title">اسلاید ها</p>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>عکس</th>
                            <th>الویت</th>
                            <th>لینک</th>
                            <th>نوع</th>
                            <th>وضعیت نمایش</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sellers as $seller)
                        <tr role="row" class="">
                            <td><a href="">{{ $seller->id }}</a></td>

                            <td>
                                <a href=""
                                    onclick="deleteItem(event, '{{ route('admin.sellers.destroy', $seller->id) }}')"
                                    class="item-delete mlg-15" title="حذف"></a>
                                <a href="{{ route('admin.sellers.edit',  $seller->id) }}" class="item-edit "
                                    title="ویرایش"></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
