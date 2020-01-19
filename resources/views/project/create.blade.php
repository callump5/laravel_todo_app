@extends('layout')

@section('dashboard-header')
Create A Project
@endsection


@section('dashboard-buttons')
    <a href="{{route('project.index')}}">Back</a>
@endsection


@section('dashboard-content')

<form method="POST" action="/projects">
@csrf

    <div class="field">
        <label for="title">Project Title</label>
        <input id="title" type="title" name="title" required>
    </div>


    <div class="field">
        <label for="description">Description</label>
        <input id="description" type="text" name="description" required>
    </div>


    <div class="field">
        <label for="due_date">Due Date</label>
        <input id="due_date" type="text" name="due_date" required>
    </div>
    
    <div class="field">
        <label for="completed">Competed</label>
        <input id="completed" type="int" name="completed" required>
    </div>

    <input type="submit" value="Submit">

</form>
    
@endsection