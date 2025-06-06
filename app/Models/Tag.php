<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function photos(){
        return $this->morphedByMany(Photo::class, 'taggable');
    }

    public function videos(){
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
