<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Kiran Anand">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="/favicon.png">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Kiran Anand</title>
    </head>

    <body class="bg-gray-200">

        <nav class="p-6 bg-white flex justify-between mb-6">

            <ul class="flex items-center">
                <li><a href="{{ url('/') }}" class="p-3">Kiran Anand CV</a></li>
                <li><a href="{{ url('/home') }}" class="p-3">Home</a></li>
            </ul>

            <ul class="flex items-center">

                @auth
                    <li><a href="{{ url('/') }}" class="p-3">{{ auth()->user()->name }}</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button>Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li><a href="{{ route('login') }}" class="p-3">Login</a></li>
                    <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
                @endguest

            </ul>

        </nav>

        @yield('content')

    </body>

</html>
