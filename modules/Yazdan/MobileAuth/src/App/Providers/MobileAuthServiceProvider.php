<?php

namespace Yazdan\MobileAuth\App\Providers;

use Illuminate\Support\ServiceProvider;
use Yazdan\MobileAuth\Services\MobileAuthService;

class MobileAuthServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind('MobileAuth', function () {
            return new MobileAuthService();
        });
    }

    public function boot(): void
    {
        $this->_loadRoutes();
        $this->_loadViews();
        $this->_loadMigrations();

    }

    private function _loadRoutes()
    {
        return $this->loadRoutesFrom(__DIR__ . '/../../Routes/web.php');
    }

    private function _loadViews()
    {
        return $this->loadViewsFrom(__DIR__ . '/../../Resources/views/', 'MobileAuth');
    }

    private function _loadMigrations()
    {
        return $this->loadMigrationsFrom(__DIR__ . '/../../Database/migrations/');
    }
}
