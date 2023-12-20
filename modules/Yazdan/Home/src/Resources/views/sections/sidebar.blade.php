
<div class="myaccount-tab-menu nav" role="tablist">


    @foreach (config('sidebarHome.items') as $item)
    @if ($item)
    @if ( !array_key_exists('permission',$item) ||
    auth()->user()->hasAnyPermission($item['permission']) ||
    auth()->user()->hasPermissionTo(\Yazdan\RolePermissions\Repositories\PermissionRepository::PERMISSION_SUPER_ADMIN))

        <a href="{{$item['url']}}" class="{{ str_starts_with(request()->url(),$item['url']) ? 'active' : ''}}">
            <i class="fa {{$item['icon']}}"></i>{{$item['title']}}
        </a>

    @endif
    @endif
    @endforeach

    <a href="login-register.html"><i class="fa fa-sign-out"></i> خروج</a>
</div>
