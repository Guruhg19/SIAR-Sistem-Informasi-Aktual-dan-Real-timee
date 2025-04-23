<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'name',
        'occupation',
        'avatar',
        'slug'
    ];

        public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function news(){
        return $this->hasMany(ArticleNews::class);
    }
}
