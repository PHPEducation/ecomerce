@extends('layouts.app')

@section('content')
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
        <label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="sign-in-htm">
                <div class="group">
                    <label for="email" class="col-sm-4 col-form-label text-md-right label">Username</label>
                    <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="group">
                    <label for="password" class="col-md-4 col-form-label text-md-right label">Password</label>
                     <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                     @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
