<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Stock;
use App\Shoe_img;
use App\Color;

class Shoe extends Model
{
    public $table = 'shoes';
    public $guarded = [];

    public function shoe_img(){
        return $this->hasMany('App\Shoe_img', 'shoe_id');
    }
    
    public function stock(){
        return $this->hasMany('App\Stock','shoe_id');
    }

    public function color(){
        return $this->hasMany('App\Color','shoe_id');
    }

    public function preview(){
        $previewFiles = ['type'=>'0'];
        foreach ($this->shoe_img() as $img){
            if (in_array($img->category_id, ['1','2','3'])){
                $previewFiles['type'] = $img->category_id;
                array_push($previewFiles, $img->img_path);
            }
        }
        return $previewFiles;
    }
}