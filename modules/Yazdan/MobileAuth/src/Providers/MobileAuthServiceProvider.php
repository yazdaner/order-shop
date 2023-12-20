<?php

namespace Yazdan\MobileAuth\Providers;

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
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
    }
}
