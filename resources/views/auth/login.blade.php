@extends('layouts.app')

@section('content')
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LiBooks | Login Form</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="{{ asset('templog/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

        <!-- Main css -->
        <link rel="stylesheet" href="{{ asset('templog/css/style.css') }}">
    </head>
    <body>

        <div>
            <!-- Sing in  Form -->
            <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                        
                            <figure><img src="{{asset('images/logoabangfull.png')}}" alt="sing up image"></figure>
                            <figure><img src="{{ asset('templog/images/signin-image.jpg') }}" alt="sing up image"></figure>
                            
                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">Admin Log-in</h2>
                            <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                            @csrf

                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>

                                    <div class="col-md-12">
                                        <input
                                            id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="E-mail"
                                        >

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" ><i class="zmdi zmdi-lock"></i></label>

                                    <div class="col-md-12">
                                        <input 
                                            id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                            name="password" required autocomplete="current-password" placeholder="Password"
                                        >

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                               
                                <div class="form-group form-button">
                                    <div class="col-md-8 offset-md-4">
                                        <div class="form-group form-button">
                                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log-in"/>
                                        </div>
                                         <!--
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                        -->
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <!-- JS -->
        <script src="{{ asset('templog/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('templog/js/main.js') }}"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

@endsection
