<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    public $table = "colors";
    public $guarded = [];
    use SoftDeletes;

    public function stock (){
        return $this->hasMany('App\Stock','color_id');
    }

    public function shoe (){
        return $this->belongsTo('App\Shoe');
    }
}
