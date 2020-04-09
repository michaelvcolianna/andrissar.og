<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Andrissar</title>
        @yield('scripts')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav>
                <a id="brand" href="{{ route('home') }}">Andrissar</a>

                @auth
                    <form id="logout" action="{{ route('logout') }}" method="post">
                        @csrf

                        <span>{{ auth()->user()->name }}</span>

                        <button type="submit">Logout</button>
                    </form>
                @endauth
            </nav>
        </header>

        <main id="app">
            @yield('content')
        </main>
    </body>
</html>
