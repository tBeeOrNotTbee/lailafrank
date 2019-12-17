<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping_method extends Model
{
    public $table = 'Shipping_services';
    public $guarded = [];

    public function shippingService ()
    {
        return $this->belongsTo('App\Shipping_service', 'shipping_service_id');
    }

    public function address ()
    {
        return $this->belongsTo('App\Adress', 'adress_id');
    }

    public function paymentOrder ()
    {
        return $this->belongsTo('App\Payment_order', 'payment_order_id');
    }
}
