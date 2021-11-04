<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable=['name','occupation'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }


    
}
