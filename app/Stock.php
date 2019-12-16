<?php

namespace App;
use App\Shoe;
use App\Place;
use App\Color;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $table = 'stock';
    public $guarded = [];

    public function shoe(){
        return $this->hasOne('App\Shoe');
    }

    public function place(){
        return $this->hasOne('App\Place');
    }

    public function color(){
        return $this->hasOne('App\Color');
    }
}
