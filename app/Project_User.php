<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_User extends Model
{
    //

    public function projects(){
        return $this->belongsToMany(Project::class);
    }
    public function user(){
        return $this->belongsToMany(User::class);
    }
}
