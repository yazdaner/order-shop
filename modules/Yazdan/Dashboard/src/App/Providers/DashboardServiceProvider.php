<?php

namespace Yazdan\Dashboard\App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Yazdan\Dashboard\App\Policies\DashboardPolicy;
use Yazdan\RolePermissions\Repositories\PermissionRepository;

class DashboardServiceProvider extends ServiceProvider
{

    public function register()
    {
        Route::middleware('web')
            ->group(__DIR__ . '/../../Routes/dashboard_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../../Resources/views/', 'Dashboard');
        $this->mergeConfigFrom(__DIR__ . '/../../Config/sidebar.php', 'sidebar');
        Gate::policy(Dashboard::class, DashboardPolicy::class);

    }

    public function boot()
    {
        config()->set('sidebar.items.dashboard', [
            'icon' => 'i-dashboard',
            'url' => route('admin.dashboard'),
            'title' => 'دشبورد',
            'permission' => PermissionRepository::PERMISSION_MANAGE_DASHBOARD,
        ]);
    }
}
