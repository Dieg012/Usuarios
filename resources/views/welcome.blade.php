<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
    </head>
    <body>
        <div class="container">
        <header>
            <h1>USUARIOS RE FACHEROS</h1>
        </header>
        <main>
            <br>
                <a href="{{config('app.url')}}:8000/signIn">Register</a>
                <a href="{{config('app.url')}}:8000/logIn">LogIn</a>
            </div>
        </main>
        
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>-->
    </body>
</html>
