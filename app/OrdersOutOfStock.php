<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class OrdersOutOfStock extends Model
{
    public $table = 'ordersoutofstocks';
    public $guarded = [];
    use SoftDeletes;
}
