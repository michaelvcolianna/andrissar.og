@extends('layouts.app')

@section('content')
    <div id="auth">
        @if($errors->any())
            <aside class="errors">
                @foreach($errors->all() as $error)
                    <p>
                        {{ $error }}
                    </p>
                @endforeach
            </aside>
        @endif

        <aside>
            @if(session('resent'))
                <p>
                    A fresh verification link has been sent to your e-mail address.
                </p>
            @endif

            <p>
                Before proceeding, please check your e-mail for a verification link.
            </p>
        </aside>

        <form action="{{ route('verification.resend') }}" method="post">
            @csrf

            <button type="submit">Request another e-mail</button>
        </form>

        <aside>
            @if(Route::has('register'))
                {{-- <a href="{{ route('register') }}">Create an account</a> --}}
            @endif

            <a href="{{ route('login') }}">Login</a>
        </aside>
    </div>
@endsection
