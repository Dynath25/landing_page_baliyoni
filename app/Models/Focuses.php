<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Focuses extends Model
{
    protected $fillable = [
        'focus_judul',
        'focus_description',
        'focus_image',
        'is_active',
    ];

    protected $dates = ['deleted_at'];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->focus_image);
    }
}
