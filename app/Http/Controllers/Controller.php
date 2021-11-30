<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;

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
            if(request()->hasFile('image')){
                $this->deleteFile($model->image->url??null);
                $model->image()->update(['url'=>request()->file('image')->store('images','public')]);
            }
           

        }else{
            if(request()->hasFile('image')){
            $model->image()->create(['url'=>request()->file('image')->store('images','public')]);
            } 
        }
    }
    protected function storeImage($model){
        $model->image()->create(['url'=>request()->file('image')->store('images','public')]);
    }

    protected function firstUpdateOrCreate($model,$data){
        $model_var=$model::first();
        if($model_var){
            $model_var->update($data);
        }else{
            $model::create($data);
        }
    }
    protected function arr_except($arr1,$arr2){
        return Arr::except($arr1,$arr2);
    }
}
