<?php

namespace Modules\Core\Filament\Resources;

use Filament\Resources\Resource;

abstract class BaseResource extends Resource
{
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
