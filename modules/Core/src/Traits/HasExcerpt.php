<?php

namespace Modules\Core\Traits;

use Illuminate\Support\Str;

trait HasExcerpt
{
    public function getExcerpt(): string
    {
        $source = $this->getExcerptSourceField();
        $limit = $this->getExcerptLimit();

        $content = strip_tags($this->{$source} ?? '');

        return Str::limit($content, $limit);
    }

    public function getExcerptSourceField(): string
    {
        return property_exists($this, 'excerptFrom') ? $this->excerptFrom : 'body';
    }

    public function getExcerptLimit(): int
    {
        return property_exists($this, 'excerptLimit') ? $this->excerptLimit : 200;
    }

    public function getExcerptAttribute(): string
    {
        return $this->getExcerpt();
    }
}
