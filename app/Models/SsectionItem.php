<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SsectionItem extends Model
{
    use HasFactory;
    protected $fillable=['title','ssection_id'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function ssection(){
        return $this->belongsTo(Ssection::class);
    }
}
