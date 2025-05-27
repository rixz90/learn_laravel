<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasUuids, SoftDeletes;



    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function photos(){
        return $this->morphMany(Photo::class, 'imageable');
    }
}

