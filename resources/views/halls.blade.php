<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="/layouts/admin/css/normalize.css"> --}}
        {{-- <link rel="stylesheet" href="/layouts/admin/css/styles.css"> --}}
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">

        <title>Admin page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../layouts/admin/CSS/normalize.css" />
        <link rel="stylesheet" href="../layouts/admin/CSS/styles.css" />

    </head>
    <body>
        <div class="page-header">
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
                <h2>no login</h2>
            @endif

            <div class="conf-steps">
                <div class="conf-step__paragraph">
                    @foreach ($allhalls as $hall)
                        <div class="body">{{ $hall }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
