<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping_service extends Model
{
    public $table = 'Shipping_services';
    public $guarded = [];

    public function shipping_methods ()
    {
        return $this->hasMany('App\Shipping_method', 'shipping_method_id');
    }
}
