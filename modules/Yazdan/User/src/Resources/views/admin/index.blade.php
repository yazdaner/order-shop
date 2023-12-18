@extends('Dashboard::master')
@section('breadcrumb')
    <li><a href="#" title="کاربران">کاربران</a></li>
@endsection
@section('content')

<div class="main-content padding-0 users">
    <div class="row no-gutters">
        <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
            <p class="box__title">کاربران</p>


            <div class="bg-white padding-20 d-flex justify-content-between">
                <div class="t-header-search">
                    <form action="">
                        <div class="t-header-searchbox font-size-13">
                            <input type="text" class="text search-input__box font-size-13" placeholder="جستجوی در کاربران">
                            <div class="t-header-search-content ">
                                <input type="text" class="text" name="key" placeholder="شناسه">
                                <input type="text" class="text" name="name"  placeholder="نام">
                                <input type="text" class="text" name="email"  placeholder="ایمیل">
                                <button type="submit" class="btn btn-yazdan">جستجو</button>
                            </div>
                        </div>
                    </form>
                </div>
                <a class="btn btn-yazdan" href="{{route('admin.users.index')}}">همه کاربران</a>
            </div>

            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>عکس</th>
                            <th>نام کاریری</th>
                            <th>ایمیل</th>
                            <th>نام</th>
                            <th>شماره موبایل</th>
                            <th>ip</th>
                            <th>تاریخ عضویت</th>
                            <th>وضعیت حساب</th>
                            <th>نقش کاربری</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr role="row" class="">
                                <td><a href="">{{$blogs->firstItem() + $key}}</a></td>
                                <td>
                                    <a href="{{$user->getImage()}}" target="_blank"><img src="{{$user->getImage(60)}}" class="profile_sm"></a>
                                </td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->username ?? '-'}}</td>
                                <td>{{$user->mobile ?? '-'}}</td>
                                <td>{{$user->ip}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <ul class="scrollable">
                                        @forelse ($user->roles as $role)
                                            <li class="roleItem">
                                                {{__($role->name)}}
                                                <span class="tagRemove" onclick="deleteItem(event,'{{route('admin.users.removeRole',['user' => $user->id , 'role' => $role->id])}}','li')">x</span>
                                            </li>
                                        @empty
                                        کاربر عادی
                                        @endforelse

                                    </ul>
                                </td>
                                <td class="confirmation_status"><span class="{{$user->verifyStyle}}">{{$user->verify}}</span></td>
                                <td>
                                    <a href="" onclick="deleteItem(event,'{{route('admin.users.destroy',$user->id)}}')" class="item-delete mlg-10" title="حذف"></a>
                                    <a href="{{route('admin.users.edit',$user->id)}}" class="item-edit mlg-10" title="ویرایش"></a>
                                    <a onclick="setFormAction({{$user->id}})" class="item-role  mlg-10" href="#rolesModal" rel="modal:open"></a>
                                    <a href="" onclick="UpdateConfirmationStatus(event,'{{route('admin.users.manualVerify',$user->id)}}','تایید شده','آیا از تایید این کاربر اطمینان دارید ؟')" class="item-confirm mlg-10" title="تایید"></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <div class="modal" id="rolesModal">
                        <form id="form-select-role">
                            @csrf
                            <select name="role">
                                <option value="">انتخاب نقش کاربری</option>
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{__($role->name)}}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-yazdan">تایید</button>
                        </form>
                    </div>
                </table>

            </div>
            {{ $users->links('pagination.admin') }}
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
        function setFormAction(userId){
            let form = document.getElementById('form-select-role');
            let action = "{{route('admin.users.role',3234686)}}";
            form.action = action.replace(3234686,userId);
            form.method = 'POST';
        }
    </script>
@endsection

