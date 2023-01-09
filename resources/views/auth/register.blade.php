@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container" style="padding-top:8.8rem; padding-bottom:9rem;">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-9">
            <div class="card bg-petrol border-0">

                <div class="card-body bg-petrol">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row justify-content-center mt-3">
                            <div class="col-md-10">

                                <input id="name" type="text" placeholder="{{ __('Name') }}" class="my-4 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="email" type="email" placeholder="{{ __('Email Address') }}" class="my-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="my-4 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password-confirm" type="password" placeholder="{{ __('Repate Password') }}" class="my-4 form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-4 px-3">
                            <div class="col-md-10 offset-md-1 bg-lightblack">
                                <button type="submit" class="btn w-100">
                                    <label class="text-defualt"><b>{{ __('Register') }}</b></label>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="text-center mb-3">
                        <label class="d-inline text-defualt fs-md">Are you a member?</label>
                        <a class="text-black fs-md text-decoration-none d-inline" href="{{ route('login') }}"><b> Login </b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
