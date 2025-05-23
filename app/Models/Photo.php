<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Photo extends Model
{
    protected $fillable = ['path'];
    public function imageable() : MorphTo
    {
        return $this->morphTo();
    }

    public function tags() : MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
