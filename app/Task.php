<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public function project()
    {

    	return $this->belongsTo('\App\Project');
    }

    public function posts()
    {

    	return $this->hasMany('\App\Post');
    }

    public function comments()

    {
    	return $this->morphMany('App\Comment', 'commentable');
    }
}
