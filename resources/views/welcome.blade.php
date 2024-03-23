<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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

            <div class="content">
                <div class="title m-b-md">
                    <img src="data:image/png;base64,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" alt="">
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
