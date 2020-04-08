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
    </div>
@endsection
