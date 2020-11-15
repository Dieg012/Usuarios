<div>
<h1>User Data </h1>
</div>

<hr>@foreach ($user as $userData)
    <strong>{{$userData->name}}</strong>
    <a href="{{config('api.url')}}/task/creator/{{$userData->id}}">Create Task</a>
@endforeach

@foreach ($tasks as $task)
    <p>{{$task->name}}</p>
    <p>{{$task->description}}</p>
    <p>{{$task->date}}</p>
@endforeach

