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

    public function shoe_img()
    {
        return $this->hasMany('App\Shoe_img', 'shoe_id');
    }

    public function stock()
    {
        return $this->hasMany('App\Stock', 'shoe_id');
    }

    public function color()
    {
        return $this->hasMany('App\Color', 'shoe_id');
    }

    public function category(){
        return $this->belongsTo('App\Shoe_category', 'category_id');
    }

    public function previewLarge()
    {
        $previewLarge = $this->shoe_img()->where('category_id', '=', 3)->first();

        if (is_null($previewLarge)){
            return null;
        }else{
            return $previewLarge;
        }
    }

    public function previewSmall()
    {
        $previewA = $this->shoe_img()->where('category_id', '=', 1)->first();
        
        $previewB = $this->shoe_img()->where('category_id', '=', 2)->first();
        
        if (is_null($previewA)&&is_null($previewB)){
            return null;
        }else{
            return [$previewA, $previewB];
        }
    }

    public function previewA()
    {
        $previewA = $this->shoe_img()->where('category_id', '=', 1)->first();

        if (is_null($previewA)){
            return null;
        }else{
            return $previewA;
        }
    }

    public function previewB()
    {
        $previewB = $this->shoe_img()->where('category_id', '=', 2)->first();

        if (is_null($previewB)){
            return null;
        }else{
            return $previewB;
        }
    }
}
