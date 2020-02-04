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
        $previewFiles = [];

        foreach ($this->shoe_img as $img){
            if (in_array($img->category_id, ['1','2','3'])){
                $preview['type'] = $img->category_id;
                $preview['path'] = $img->img_path;
                array_push($previewFiles, $preview);
            }
        }

        return $previewFiles;
    }
}