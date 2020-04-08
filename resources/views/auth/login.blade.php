@extends('layouts.app')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf

        <fieldset class="form-text">
            <label for="email">E-mail address</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" autofocus required autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false">
        </fieldset>

        <fieldset class="form-text">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required autocomplete="current-password">
        </fieldset>

        <fieldset class="form-checkbox">
            <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Remember me</label>
        </fieldset>

        <button type="submit">Login</button>
    </form>

    <aside>
        @if(Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forgot your password?</a>
        @endif

        @if(Route::has('register'))
            <a href="{{ route('register') }}">Create an account</a>
        @endif
    </aside>
@endsection
