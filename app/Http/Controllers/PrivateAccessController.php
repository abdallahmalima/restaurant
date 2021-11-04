<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrivateAccessController extends Controller
{
    //
    public function __invoke($file)
    {
       return response()->file(Storage::path('secrets/'.$file));
    }
}
