<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    protected $fillable=['text'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
