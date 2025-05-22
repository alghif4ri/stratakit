<?php

namespace Modules\Core\Traits;

trait HasVisibility
{
    public function isVisible(): bool
    {
        return (bool) $this->is_visible;
    }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }
}
