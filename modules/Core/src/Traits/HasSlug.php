<?php

namespace Modules\Core\Traits;

use Illuminate\Support\Str;

trait HasSlug
{
    public static function bootHasSlug(): void
    {
        static::creating(function ($model) {
            $model->generateSlug();
        });

        static::updating(function ($model) {
            $model->generateSlug();
        });

        static::updating(function ($model) {
            $from = $model->slugFrom ?? 'title';

            if (($model->regenerateSlugOnUpdate ?? true) && $model->isDirty($from)) {
                $model->slug = Str::slug($model->{$from});
            }
        });
    }

    public function generateSlug(): void
    {
        if (! $this->slug && $this->slugSourceField()) {
            $this->slug = Str::slug($this->{$this->slugSourceField()});
        }
    }

    protected function slugSourceField(): string
    {
        return property_exists($this, 'slugFrom') ? $this->slugFrom : 'title';
    }
}
