<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    public $table = 'addresses';
    public $guarded = [];
    use SoftDeletes;

    public function shipping_methods ()
    {
        return $this->hasMany('App\Shipping_method', 'address_id');
    }

    public function user ()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function fullName(){
        return $this->name.' '.$this->surname;
    }

    public function cardLineOne()
    {
        return $this->street.' '.$this->number.', PISO '.' '.$this->floor.', '.$this->apartment;
    }

    public function cardLineTwo()
    {
        return $this->city.', '.$this->post_code;
    }

    public function cardLineThree()
    {
        return $this->state.', '.$this->country;
    }

    public static function sendingCost($id)
    {
        return 0;
    }
}
