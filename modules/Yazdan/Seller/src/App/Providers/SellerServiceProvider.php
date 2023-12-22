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
            'title' => 'فروشنده',
            'permission' => PermissionRepository::PERMISSION_MANAGE_SELLER,
        ]);

        config()->set('sidebarHome.items.sellers', [
            'icon' => 'uil-sellers',
            'url' => route('sellers'),
            'title' => 'فروشنده'
        ]);
    }
}
