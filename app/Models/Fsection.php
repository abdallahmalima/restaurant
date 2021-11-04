<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fsection extends Model
{
    use HasFactory;

    protected $fillable=['title','number'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
