<?php

namespace Modules\Core\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasCreator
{
    public static function bootHasCreator()
    {
        static::creating(function ($model) {
            if (auth()->check()) {
                $model->created_by = auth()->id();
            }
        });
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'created_by');
    }
}
