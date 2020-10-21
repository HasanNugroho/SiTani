@extends('layouts.main')

@section('css','login.css')
@section('title','Login')
@section('root')
<div class="login-wrapper">
        <div class="row m-auto justify-content-center login-section">
   
        <form method="POST" action="{{ route('login') }}" class="col-md-5 m-auto login-form p-5">
            @csrf
            <img src="/assets/image/logo.png" alt="" width="200px" class="d-flex m-auto">
            <div>
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <label for="password" >Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">Remember me</label>
                </label>
            </div>
            @if (Route::has('password.request'))
                <a class="nav-link" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif
            <button class="btn btn-success" type="submit">Submit</button>

        </form>
    
            

     </div>
   </div>
@endsection
