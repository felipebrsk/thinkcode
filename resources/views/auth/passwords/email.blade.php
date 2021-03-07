@extends('layouts.auth')

@section('content')

@if($errors->any())
    <div class="alert">
        <div class="container alert alert-danger">
            {{$errors->first()}}
        </div>
    </div>
@endif

<div id="container">
    <div class="second-page second-wrap wrap">
        <div id="head">
            <img class="logo" src="https://image.flaticon.com/icons/png/512/37/37631.png">
            <span class="name justify-content-center">
            ThinkCode
            </span>
        </div>
        <div id="main">
            @include('layouts.main-left')
            <div id="main-right">
            <div id="login-box">
                <h3 id="pswd-title" class="login-title login-active">
                Recuperar senha
                </h3>
                <form action="{{ route('password.email') }}" method="POST"  class="login-form form-active" id="pswd-login">
                    @csrf

                <div class="textbox">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                    <input id="email" type="email" placeholder="Insira um e-mail válido" class="user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus required>
                </div>
                <div class="btn-box">
                    <button type="submit" class="sign-up-btn">Recuperar</button>
                </div>
                
                <p class="isSignup">
                    <a href="{{ route('login') }}" class="signup-url">
                    Login
                    </a>
                </p>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/auth.js') }}"></script>
@endsection
