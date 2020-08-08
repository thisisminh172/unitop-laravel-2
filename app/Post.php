<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['title','content','user_id','votes','thumbnail'];

    function FeaturedImages(){
        return $this->hasOne('App\FeaturedImages');
    }

    function user(){
        return $this->belongsTo('App\User');
    }
}
