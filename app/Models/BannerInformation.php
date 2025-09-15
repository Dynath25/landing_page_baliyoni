<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerInformation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'information',
        'is_active',
        'banner',
        'type',
    ];

    protected $dates = ['deleted_at'];

}
