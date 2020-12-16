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
    public function courses(){
        return $this->hasMany('App\Course');
    }

    public static function list(){
        $instructors = Instructor::get();
        $list = [];

        foreach($instructors as $i){
            $list[$i->id] = $i->user->lname . ", " . $i->user->fname;
        }
        return $list;
    }
}