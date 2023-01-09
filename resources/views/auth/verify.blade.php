@extends('layouts.app')

@section('title', 'Verify Your Email')

@section('content')
<div class="container" style="padding-top:8.8rem; padding-bottom:25rem;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-petrol text-black">
                <div class="card-header fs-lg"><b>{{ __('Verify Your Email Address') }}</b></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            <b>{{ __('A fresh verification link has been sent to your email address.') }}</b>
                        </div>
                    @endif

                    <b>{{ __('Please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},</b>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn p-0 m-0 align-baseline" style="color: rgb(136, 164, 124)">
                            <b>{{ __('click here to request another') }}.</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
