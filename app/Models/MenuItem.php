<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $fillable=['name','price'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
