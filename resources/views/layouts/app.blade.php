<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Login App</title>
    </head>

    <body class="bg-gray-200">

        <nav class="p-6 bg-white flex justify-between mb-6">

            <ul class="flex items-center">
                <li><a href="{{ url('/') }}" class="p-3">Home</a></li>
            </ul>

            <ul class="flex items-center">

                @auth
                    <li><a href="" class="p-3">Kiran Anand</a></li>
                    <li>
                        <form action="" method="post" class="p-3 inline">
                            @csrf
                            <button>Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li><a href="" class="p-3">Login</a></li>
                    <li><a href="" class="p-3">Register</a></li>
                @endguest

            </ul>

        </nav>

        @yield('content')

    </body>

</html>
