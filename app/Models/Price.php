<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable=['name','number','disk','emails','bandwith','sub_domains','domains'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
