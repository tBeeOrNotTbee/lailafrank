<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = "contact";

    use SoftDeletes;

    public $guarded = [];
}
