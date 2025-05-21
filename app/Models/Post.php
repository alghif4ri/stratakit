<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Traits\HasSlug;

class Post extends Model
{
    use HasSlug;

    protected string $slugFrom = 'title';

    protected $fillable = ['title', 'slug'];
    
    protected bool $regenerateSlugOnUpdate = true;

}
