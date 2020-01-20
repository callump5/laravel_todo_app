<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'due_date', 'completed'];

    static function get_project_assigned_users($project){
        
    }


    static function check_unsigned(){
        $projects = Project::all();
        $unassigned_projects = Project::where('assigned', '0')->get();
        return $unassigned_projects;
    }

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
    


}
