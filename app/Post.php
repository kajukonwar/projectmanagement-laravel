<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = ['description', 'task_id', 'user_id'];

    public function task()
    {
    	return $this->belongsTo('\App\Task');
    }

    public function user()

    {
    	return $this->belongsTo('\App\User');
    }

    public function comments()

    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
