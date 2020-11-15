<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Sing in-->

    <div class="container">
        <header>
            <h1>Sing in</h1>
            <hr>
        </header>
        <main>
            <div>
                <form action="{{route ('createUser')}}" method="post">
                @csrf
                    <strong>Nombre: </strong><input type="text" name="name" id="">
                    <strong>e-mail: </strong><input type="email" name="email" id="">
                    <strong>Password: </strong><input type="password" name="pass" id="">
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </main>
    </div>

</body>
</html>