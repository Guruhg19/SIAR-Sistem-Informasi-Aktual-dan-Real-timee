<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BannerAdvertisement extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'link',
        'is_active',
        'type',
        'thumbnail'
    ];
}
