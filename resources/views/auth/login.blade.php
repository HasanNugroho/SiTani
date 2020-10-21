@extends('layouts.main')

@section('css','login.css')
@section('title','Login')
@section('root')
<div class="login-wrapper">

        <div class="row m-auto justify-content-center login-section">
   
        <form method="POST" action="{{ route('login') }}" class="col-md-5 m-auto login-form p-5 shadow">
            <img src="/assets/image/logo.png" alt="" width="200px" class="d-flex m-auto">
            @csrf
            <div>
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control @error('email')is-invalid @enderror" type="email" name="email" :value="old('email')" required autofocus />
            @error('email')
            <span class="invalid-feedback">Email / Password yang anda masukan salah</span>
            @enderror
            </div>

            <div class="mt-4">
                <label for="password" >Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            
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
