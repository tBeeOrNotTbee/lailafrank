<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public $table = 'places';
    public $guarded = [];

    
    public function stock(){
        return $this->hasMany('App\Stock','place_id');
    }
}