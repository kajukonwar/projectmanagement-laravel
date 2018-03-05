<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Project extends Model
{
    //

    protected $fillable = [
    	'name', 'description', 'user_id'
    ];

    public function user()
    {

    	return $this->belongsTo('App\User');
    }

    public function tasks()
    {

    	return $this->hasMany('App\Task');
    }

    public function comments()

    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function teamMembers()
    {

        return $this->belongsToMany(User::class);
    }
}
