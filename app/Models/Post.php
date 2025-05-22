<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Traits\HasCreator;
use Modules\Core\Traits\HasUpdater;
use Modules\Core\Traits\HasExcerpt;
use Modules\Core\Traits\HasStatus;
use Modules\Core\Traits\HasSlug;

class Post extends Model
{
    use HasSlug;
    use HasCreator;
    use HasUpdater;
    use HasExcerpt;
    use HasStatus;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'created_by',
    ];

    protected string $excerptFrom = 'body';
    protected int $excerptLimit = 100;
    protected string $slugFrom = 'title';
    protected bool $regenerateSlugOnUpdate = true;
}
