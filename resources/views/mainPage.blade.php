<h1>User Data</h1>
<hr>
@foreach ($user as $userData)
    <p>{{$userData->name}}</p>
    <p>{{$userData->email}}</p>
@endforeach