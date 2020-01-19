<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'due_date', 'completed'];

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);

    }
}
