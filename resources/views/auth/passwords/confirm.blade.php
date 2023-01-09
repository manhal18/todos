@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
<div class="container" style="padding-top:8.8rem; padding-bottom:19rem;">
    <div class="row justify-content-center text-black">
        <div class="col-lg-5 col-md-9">
            <div class="card bg-petrol border-0">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row my-4">
                            <div class="col-md-10 m-auto">
                                <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row text-center mb-4">
                            <div class="col-md-10 m-auto bg-lightblack">
                                <button type="submit" class="btn" style="color: rgb(136, 164, 124)">
                                    {{ __('Confirm Password') }}
                                </button>
                            </div>
                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn" href="{{ route('password.request') }}" style="color: rgb(136, 164, 124)">
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
@endsection
