<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::orderBy('due_date', 'asc')->get();

        return view('project.index', [
            'projects' => $projects
        ]);
    }
    
    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    
    {

        
        $guitar = new Project;

        $guitar->title = request('title');
        $guitar->description = request('description');
        $guitar->due_date = request('due_date');
        $guitar->completed = request('completed');

        $guitar->save();

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
