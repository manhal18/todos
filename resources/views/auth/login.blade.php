@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container" style="padding-top:8.8rem; padding-bottom:9rem;">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-9">
            <div class="card bg-petrol border-0">

                <div class="card-body bg-petrol">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <input id="email" type="email" placeholder="{{ __('Email Address') }}" class="my-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="text-center my-4">
                            <div class="form-check d-inline mx-2">
                                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="text-defualt fs-md" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="d-inline">
                                    <a class="text-black mx-2 fs-md text-decoration-none" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-10 offset-md-1 bg-lightblack">
                                <button type="submit" class="btn w-100">
                                    <label class="text-defualt"><b>{{ __('Login') }}</b></label>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="text-center mb-3">
                        <label class="d-inline text-defualt fs-md">Not a member?</label>
                        <a class="text-black fs-md text-decoration-none d-inline" href="{{ route('register') }}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
