<?php

namespace Modules\Settings\Providers;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(base_path('modules/Settings/Database/migrations'));
        $this->loadMigrationsFrom(__DIR__ . '/../../../Database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        // bisa ditambahkan loadViewsFrom dan lainnya kalau perlu
    }

    public function register(): void
    {
        //
    }
}
