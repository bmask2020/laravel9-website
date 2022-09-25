@extends('auth.master')

@section('auth.title', 'Sign In')

@section('auth')
    
                 
                 
    <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>
    
    <div class="p-3">
                            <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
                                @csrf
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="text" name="username" :value="old('username')" required autofocus placeholder="Username">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" name="password" required placeholder="Password">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="form-label ms-1" for="customCheck1">Remember me</label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>
    
                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                    </div>
                                    <div class="col-sm-5 mt-3">
                                        <a href="{{route('register')}}" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                    </div>
                                </div>
                            </form>
    </div>


@endsection