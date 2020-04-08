@extends('layouts.app')

@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf

        <fieldset class="form-text">
            <label for="name">Name</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" autofocus required autocorrect="off" autocapitalize="off" autocomplete="name" spellcheck="false">
        </fieldset>

        <fieldset class="form-text">
            <label for="email">E-mail address</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autocorrect="off" autocapitalize="off" autocomplate="email" spellcheck="false">
        </fieldset>

        <fieldset class="form-text">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required autocomplete="new-password">
        </fieldset>

        <fieldset class="form-text">
            <label for="password-confirm">Confirm password</label>
            <input id="password-confirm" name="password_confirmation" type="password" required autocomplete="new-password">
        </fieldset>

        <button type="submit">Submit</button>
    </form>

    <aside>
        @if(Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forgot your password?</a>
        @endif

        <a href="{{ route('login') }}">Login</a>
    </aside>
@endsection
