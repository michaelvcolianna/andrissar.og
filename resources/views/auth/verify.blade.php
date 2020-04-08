@extends('layouts.app')

@section('content')
    <div id="auth">
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
    </div>
@endsection
