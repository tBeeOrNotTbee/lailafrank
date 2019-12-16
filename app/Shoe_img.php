<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shoe;

class Shoe_img extends Model
{
    public $table = 'shoes_imgs';
    public $guarded = [];

    public function shoe(){
        return $this->belongsTo('app\shoe', 'id');
    }
}
