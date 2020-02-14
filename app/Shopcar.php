<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shopcar extends Model
{
    public $table = 'shopcars';
    public $guarded = [];

    public function stock ()
    {
        return $this->belongsToMany('App\Stock', 'shopcar_stock', 'shopcar_id', 'stock_id')->withPivot('id');
    }

    public function payment_order ()
    {
        return $this->belongsTo('App\Payment_order', 'shopcar');
    }

    public function user ()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function address ()
    {
        return $this->hasMany('App\User', 'address_id');
    }
}
