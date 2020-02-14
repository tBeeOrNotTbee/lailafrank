<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    public $table = 'feedback';
    public $guarded = [];
    use SoftDeletes;

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
