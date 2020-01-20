<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use App\Project_User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::orderBy('due_date', 'asc')->get();
        $unassigned = Project::check_unsigned()->count();


        $users = User::all();
        $available = Project::check_unsigned();


        return view('project.index', [
            'projects' => $projects,
            'unsigned' => $unassigned,

            'users' => $users,
            'available' => $available
        ]);
    }
    
    public function create()
    {
        return view('project.create');
    }


    public function assign(Request $request){ 
        
        $projects = Project::orderBy('due_date', 'asc')->get();
        $unassigned = Project::check_unsigned()->count();


        $users = User::all();
        $available = Project::check_unsigned();


        return view('project.assign', [
            'projects' => $projects,
            'unsigned' => $unassigned,

            'users' => $users,
            'available' => $available
        ]);
    }

    public function store_project_user_assignment(Request $request)
    {

        $pa  = new Project_User;

        $pa->user_id = request('user_id');
        $pa->project_id  = request('project_id');

        $pa->save();

        $sp = Project::find(request('project_id'));
        $sp->assigned = 1;
        $sp->save();


        return redirect('/projects');

    }

    public function store(Request $request)
    
    {        
        $project = new Project;

        $project->title = request('title');
        $project->description = request('description');
        $project->due_date = request('due_date');
        $project->completed = request('completed');

        $project->save();

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return view('project.show', ['project' => $project]);
    }

    public function edit(Project $project)
    {
        //
    }


    public function update(Request $request, Project $project)
    {
        //
    }

    public function destroy(Project $project)
    {
        //
    }
}
