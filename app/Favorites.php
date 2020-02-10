<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favorites extends Model
{
    public $table = 'favorites';
    public $guarded = [];
    use SoftDeletes;
}
