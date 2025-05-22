<?php

namespace Modules\User;

use App\Providers\ModuleServiceProvider;

class UserServiceProvider extends ModuleServiceProvider
{
    protected string $modulePath = __DIR__;
    protected string $viewNamespace = 'user';
}