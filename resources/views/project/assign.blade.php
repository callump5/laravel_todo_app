
<form method="POST" action="/projects/assign">
@csrf

    <div class="field">
        <label for="project">Unassigned Projects</label>
        <select name='project_id'>

            @foreach ($available  as $ava)
                <option value="{{$ava->id}}">{{$ava->title}}</option>
            @endforeach
        </select>
    </div>


    <div class="field">
        <label for="user">Users</label>
        <select name="user_id" id="user">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <input type="submit" value="Submit">

</form>
