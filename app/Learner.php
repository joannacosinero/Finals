<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    protected $fillable = ['user_id', 'level', 'status'];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
