<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

abstract class ModuleServiceProvider extends ServiceProvider
{
    protected string $modulePath = '';
    protected string $viewNamespace = '';

    public function boot(): void
    {
        if ($this->modulePath) {
            $this->loadRoutesFrom($this->modulePath . '/routes/web.php');
            $this->loadMigrationsFrom($this->modulePath . '/Database/Migrations');
            $this->loadViewsFrom($this->modulePath . '/resources/views', $this->viewNamespace);
        }
    }
}