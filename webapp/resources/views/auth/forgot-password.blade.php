@extends('auth.master')

@section('auth.title', 'Rest Password')

@section('auth')
                        <h4 class="text-muted text-center font-size-18"><b>Reset Password</b></h4>
    
                        <div class="p-3">
                            <form class="form-horizontal mt-3" method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div>
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                </div>

                                 <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                                    </div>
                                </div>
    
                                <div class="form-group pb-2 text-center row mt-3">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">{{ __('Email Password Reset Link') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>

@endsection
