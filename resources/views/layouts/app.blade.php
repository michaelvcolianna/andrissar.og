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
                <div id="brand">
                    <a id="logo" href="{{ route('home') }}">Andrissar</a>

                    <a id="campaign" href="//campaign.andrissar.org">Campaign Site</a>
                </div>

                @auth
                    <form id="logout" action="{{ route('logout') }}" method="post">
                        @csrf

                        <span>{{ auth()->user()->name }}</span>

                        <button type="submit">Logout</button>
                    </form>
                @else
                    <span id="guest">Guest</span>
                @endauth
            </nav>
        </header>

        <main id="app">
            @yield('content')
        </main>
    </body>
</html>
