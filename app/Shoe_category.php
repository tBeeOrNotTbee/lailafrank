<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shoe_category extends Model   
{
    public $table = "Shoe_categories";
    public $guarded = [];
    use SoftDeletes;

    public function Shoes(){
        return $this->hasMany('App\Shoe','category_id');
    }
}
