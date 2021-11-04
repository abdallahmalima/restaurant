<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageTitle extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    
    public function pageTitleHeaders(){
        return $this->hasMany(pageTitleHeader::class);
       }
}
