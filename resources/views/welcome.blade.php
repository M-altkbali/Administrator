<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrator-Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="wellcome_page relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">



        @if (Route::has('login'))
            <div class="head hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <div>
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
                    </div>
                @endauth
            </div>
        @endif


        <div class="login-dashboard">

            <div class="dis">
                <span>Administrator Dashboard</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, assumenda ipsa minima recusandae
                    libero vero, molestiae sint impedit a ullam itaque sit ab explicabo velit illo, id doloribus
                    possimus
                    consequuntur.</p>
            </div>


            <img src="{{ url('img/log.jfif') }}" alt="">
        </div>


    </div>
</body>

</html>
