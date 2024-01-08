<?php

namespace Yazdan\Seller\App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Yazdan\RolePermissions\Repositories\PermissionRepository;
use Yazdan\Seller\App\Models\Seller;
use Yazdan\Seller\App\Policies\SellerPolicy;

class SellerServiceProvider extends ServiceProvider
{

    public function register()
    {
        Route::middleware('web')
            ->group(__DIR__ . '/../../Routes/seller_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../../Resources/views/', 'Seller');
        $this->loadMigrationsFrom(__DIR__ . '/../../Database/migrations/');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../../Resources/Lang/');

        Gate::policy(Seller::class, SellerPolicy::class);
    }

    public function boot()
    {
        // admin
        config()->set('sidebar.items.sellers', [
            'icon' => 'i-sellers',
            'url' => route('admin.sellers.index'),
            'title' => 'فروشندگان',
            'permission' => PermissionRepository::PERMISSION_MANAGE_SELLER,
        ]);

        // home
            // product
        config()->set('sidebarHome.items.sellerProduct', [
            'icon' => 'uil-dashboard',
            'url' => route('home.products'),
            'title' => 'محصولات',
            'permission' => PermissionRepository::PERMISSION_MANAGE_SELLER,

        ]);
            // profile
        config()->set('sidebarHome.items.sellerProfile', [
            'icon' => 'uil-dashboard',
            'url' => route('home.seller.profile'),
            'title' => 'صفحه فروشنده',
            'permission' => PermissionRepository::PERMISSION_MANAGE_SELLER,
        ]);
            // info
         config()->set('sidebarHome.items.sellerInfo', [
            'icon' => 'uil-dashboard',
            'url' => route('home.seller.info'),
            'title' => 'مشخصات فروشنده',
            'permission' => PermissionRepository::PERMISSION_MANAGE_SELLER,
        ]);
    }
}
