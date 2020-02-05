<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    public $table = "discounts";

    use SoftDeletes;

    public $guarded = [];
}
