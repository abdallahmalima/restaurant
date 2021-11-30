<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
    use HasFactory;
    protected $fillable=['name','description','price'];

    protected $casts=[
     'price'=>'decimal:1' 
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
