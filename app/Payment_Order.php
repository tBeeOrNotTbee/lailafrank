<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Order extends Model
{
    public function user ()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function shopcar ()
    {
        return $this->belongsTo('App\Shopcar', 'shopcar_id');
    }

    public function shippingMethod ()
    {
        return $this->belongsTo('App\Shipping_method', 'shipping_method_id');
    }
}
