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
        <div class="first-page first-wrap wrap">
        <img class="balloon" style="max-width: 200px;" src="https://image.flaticon.com/icons/png/512/37/37631.png">
        </div>
        <div class="second-page second-wrap wrap" style="display: none;">
        <div id="head">
            <img class="logo" src="https://image.flaticon.com/icons/png/512/37/37631.png">
            <span class="name">
            ThinkCode
            </span>
        </div>
        <div id="main">
            @include('layouts.main-left')
            <div id="main-right">
            <div id="login-box">
                <h3 id="pswd-title" class="login-title login-active" title-index="1">
                LOGIN
                </h3>
                <h3 id="code-title" class="login-title" title-index="2">
                CADASTRO
                </h3>
                <form action="{{ route('login') }}" method="POST"  class="login-form form-active" id="pswd-login" form-index="1">
                    @csrf

                <div class="textbox">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                    <input type="email" name="email" class="user" value="{{ old('email') }}" placeholder="E-mail" required>
                </div>
                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="password" id="showHide" class="code" placeholder="Senha" required>
                    <button class="send-code-btn show-hide" type="button"><i class="fas fa-eye"></i></button>
                </div>
                <div class="btn-box">
                    <button type="submit" class="sign-up-btn">Login</button>
                </div>
                <div class="hold-pswd-box">
                    <input type="checkbox" name="pswd-memory" id="pswd-hold">
                    <label>Lembrar-me</label>
                </div>
                <p class="isSignup">
                    <a href="{{ route('password.request') }}" class="signup-url">
                    Recuperar senha
                    </a>
                </p>
                </form>

                <form action="{{ route('register') }}" method="POST" class="login-form" id="code-login" form-index="2">
                    @csrf

                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="username" class="user" value="{{ old("username") }}" placeholder="Usuário" required>
                </div>
                <div class="textbox">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                    <input type="email" name="email" class="user" value="{{ old('email') }}" placeholder="E-mail" required>
                </div>
                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="password" class="code" placeholder="Senha" required>
                </div>
                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="code" placeholder="Confirmação de senha" required>
                </div>
                <div class="btn-box">
                    <button type="submit" class="register-btn">Registrar</button>
                </div>
                </form>
            </div>
            </div>
        </div>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.show-hide').click(function(e){
                e.preventDefault();
                var passField = $('#showHide');
                var passFieldType = passField.attr('type');

                if(passFieldType == 'password'){
                    passField.attr('type', 'text');
                    $(this).val('Hide');
                }else{
                    passField.attr('type', 'password');
                    $(this).val('Show');
                }
            });
        });
    </script>
    <script src="{{ asset('js/auth.js') }}"></script>

@endsection