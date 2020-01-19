@extends('layout')

@section('dashboard-header')
Project Dashboard
@endsection

@section('dashboard-buttons')
<a href="{{route('project.create')}}">Add Project</a>
@endsection


@section('dashboard-content')
<table  class="dashboard__table">
<thead class="dashboard__table__head">
    <tr class="u-pad-left">
        <td class="u-pad-left">Project Name</td>
        <td>Due Date</td>
        <td>Task Left</td>
        <td class="u-pad-right">Status</td>
    </tr>
</thead>

<tbody class="dashboard__table__body">
    @foreach ($projects as $project)
        <tr class="{{ $loop->iteration % 2  == 0 ? 'u-odd' : 'u-even'}}">
            <td class="u-pad-left"><a href="/projects/{{$project->id}}">{{$project->title}}</a></td>
            <td>{{$project->due_date}}</td>
            <td>{{$project->assignments->count()}}</td>
            <td class="u-pad-right">
                @if (!$project->completed % 2 == 0)
                    Completed
                @else
                    Incomplete
                @endif
                </td>
        </tr>
    @endforeach 

</tbody>
</table>

@endsection
