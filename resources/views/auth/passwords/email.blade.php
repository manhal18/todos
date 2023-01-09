@extends('layouts.app')

@section('title','Reset Password')

@section('content')
<div class="container" style="padding-top:8.8rem; padding-bottom:22rem;">
    <div class="row justify-content-center text-black">
        <div class="col-lg-4 col-md-8">
            <div class="card bg-petrol border-0">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-md-10 m-auto">
                                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 px-3">
                            <div class="col-md-10 offset-md-1 bg-lightblack">
                                <button type="submit" class="btn w-100">
                                    <label class="text-defualt"><b>{{ __('Send Password Reset Link') }}</b></label>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
