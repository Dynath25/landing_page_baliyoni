<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'people',
        'people_position',
        'people_avatar',
        'is_active',
    ];

    protected $dates = ['deleted_at'];

    public function getAvatarUrlAttribute()
    {
        return asset('storage/' . $this->people_avatar);
    }
}
