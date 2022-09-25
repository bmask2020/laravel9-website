@extends('auth.master')

@section('auth.title', 'Register')

@section('auth')

<h4 class="text-muted text-center font-size-18"><b>Register</b></h4>
    
    <div class="p-3">
        <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
            @csrf


            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" type="text" name="name" :value="old('name')" required autofocus placeholder="Name">
                </div>
            </div>


            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" type="text" name="username" :value="old('username')" required placeholder="Username">
                </div>
            </div>


            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" type="email" name="email" :value="old('email')" required placeholder="Email">
                </div>
            </div>

           

            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
            </div>


            <div class="form-group mb-3 row">
                <div class="col-12">
                    <input class="form-control" type="password" name="password_confirmation" required placeholder="Password Confirmation">
                </div>
            </div>


            <div class="form-group text-center row mt-3 pt-1">
                <div class="col-12">
                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                </div>
            </div>

            <div class="form-group mt-2 mb-0 row">
                <div class="col-12 mt-3 text-center">
                    <a href="{{route('login')}}" class="text-muted">Already have account?</a>
                </div>
            </div>
        </form>
        <!-- end form -->
    </div>

    @endsection