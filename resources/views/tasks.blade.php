<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TAREAS RE FACHERAS</h1>
    <hr>
    <form action="/create/task" method="post">
    @csrf
        <strong>Name: </strong><input type="text" name="name" id="">
        <strong>Description: </strong><input type="text" name="description" id="">
        <strong>Date: </strong><input type="text" name="date" id="">
        <input type="hidden" name="userId" value="{{$userId}}">
        <input type="submit" value="Enviar">
    </form>
    <a href="{{config('api.url')}}/mainPage">Home</a>
</body>
</html>