<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function users(): BelongsToMany{
        return $this->belongsToMany(User::class);
    }
}
