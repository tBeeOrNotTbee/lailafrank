<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    public $table = 'addresses';
    public $guarded = [];

    public function shipping_methods ()
    {
        return $this->hasMany('App\Shipping_method', 'address_id');
    }

    public function user ()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
