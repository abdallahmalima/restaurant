<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function deleteFile($path){
       if(is_null($path)) return;

        if(file_exists($path)){
            unlink($path);
        }
    }
    protected function deleteWithImage($model){
        $this->deleteFile($model->image->url??null);
        $model->delete();
    }
    protected function updateImage($model){
        if($model->image){
            $this->deleteFile($model->image->url??null);
            $model->image()->update(['url'=>request()->file('image')->store('images','public')]);
        }else{
            $model->image()->create(['url'=>request()->file('image')->store('images','public')]); 
        }
    }
    protected function storeImage($model){
        $model->image()->create(['url'=>request()->file('image')->store('images','public')]);
    }
}
