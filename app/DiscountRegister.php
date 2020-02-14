<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiscountRegister extends Model
{
    public $table = 'discount_registers';
    public $guarded = [];
    use SoftDeletes;

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function discount(){
        return $this->belongsTo('App\Discount','user_id');
    }
}

