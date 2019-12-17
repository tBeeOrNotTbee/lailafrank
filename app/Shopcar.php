<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shopcar extends Model
{
    public $table = 'shopcar';
    public $guarded = [];

    public function stock ()
    {
        return $this->belongsToMany(Stock::class, 'shopcarts_stock', 'stock_id', 'stock_id');
    }

    public function payment_order ()
    {
        return $this->belongsTo('App\Payment_order', 'shopcar');
    }

    public function user ()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
