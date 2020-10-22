@extends('layouts.main')
@section('css','login.css')
@section('title','Register')
@section('root')
<div class="login-wrapper">
        <div class="row m-auto justify-content-center login-section">
        <form method="POST" action="{{ route('register') }}" class="col-md-5 m-auto login-form p-5">
            @csrf
            <img src="/assets/image/logo.png" alt="" width="200px" class="d-flex m-auto">
            <div>
                <label for="name" class="form-label mt-4">Nama</label>
                <input id="name" class="form-control" type="email" name="name" :value="old('name')" required autofocus />
            </div>
            <div>
                <label for="email" class="form-label mt-1">Email</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div>
                <label for="password" class="form-label mt-1">Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>
            <div>
                <label for="password-confrim" class="form-label mt-1">Confirm Password</label>
                <input id="password-confrim" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="mt-3">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    Sudah Daftar?
                </a>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
     </div>
   </div>
@endsection
