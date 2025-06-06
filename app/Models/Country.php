<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Country extends Model
{
#    protected $fillable = [
#        'name',
#        'id'
#    ];

    public function posts() :HasManyThrough {
        return $this->hasManyThrough(Post::class, User::class);
    }
}
