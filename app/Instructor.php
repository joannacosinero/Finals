<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'user_id', 'aoe', 'rating'
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }
}