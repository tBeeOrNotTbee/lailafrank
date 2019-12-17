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
        return $this->belongsTo('App\Shoe', 'shoe_id');
    }

    public function place(){
        return $this->belongsTo('App\Place', 'place_id');
    }

    public function color(){
        return $this->belongsTo('App\Color', 'color_id');
    }

    public function shopcars ()
    {
        return $this->belongsToMany(Shopcar::class, 'shopcarts_stock', 'stock_id', 'stock_id');
    }
}
