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
        $seller = SellerRepository::getSeller();
        if($seller == null){
            return false;
        }else{
            return true;
        }
        // if($user->hasPermissionTo(PermissionRepository::PERMISSION_MANAGE_SELLER)) return true;
    }

}
