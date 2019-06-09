<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="layouts/client/css/normalize.css">
        <link rel="stylesheet" href="layouts/client/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">

        <title>Авторизация</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
<<<<<<< HEAD
        <div id="app">
            
        </div>
=======
>>>>>>> 2484ee001db7751e4b970fc9474193fcb05de524
        @if (Route::has('login'))
            <div class="conf-step__paragraph">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @else
            @include('auth')
        @endif
    </body>
</html>
