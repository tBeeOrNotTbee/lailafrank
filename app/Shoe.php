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
}