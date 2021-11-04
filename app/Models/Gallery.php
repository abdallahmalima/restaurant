<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','category_id'
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
