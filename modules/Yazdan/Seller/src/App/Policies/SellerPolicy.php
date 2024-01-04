<?php

namespace Yazdan\Seller\App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Yazdan\RolePermissions\Repositories\PermissionRepository;
use Yazdan\Seller\Repositories\SellerRepository;
use Yazdan\User\App\Models\User;

class SellerPolicy
{
    use HandlesAuthorization;

    public function manage(User $user)
    {
        if($user->hasPermissionTo(PermissionRepository::PERMISSION_MANAGE_SELLER)) return true;
    }

}
