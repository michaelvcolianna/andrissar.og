@extends('layouts.app')

@section('content')
    <div id="auth">
        @if(session('status'))
            <aside>
                <p>
                    {{ session('status') }}
                </p>
            </aside>
        @endif

        <form action="{{ route('password.email') }}" method="post">
            @csrf

            <fieldset class="form-text">
                <label for="email">E-mail address</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" autofocus required autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false">
            </fieldset>

            <button type="submit">Send password reset link</button>
        </form>

        <aside>
            @if(Route::has('register'))
                <a href="{{ route('register') }}">Create an account</a>
            @endif

            <a href="{{ route('login') }}">Login</a>
        </aside>
    </div>
@endsection
