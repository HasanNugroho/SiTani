
@extends('layouts.main')

@section('css','login.css')
@section('title','Login')
@section('root')
<div class="login-wrapper">

        <div class="row m-auto justify-content-center login-section">

        <form method="POST" action="{{ route('register') }}" class="col-md-5 m-auto login-form p-5 shadow">
        <img src="/assets/image/logo.png" alt="" width="200px" class="d-flex m-auto">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" class="mt-3"/>
                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" required />
                @error('email')
                <span class="invalid-feedback">
                {{$message}}
                </span>
                @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" />
                @error('password')
                <span class="invalid-feedback">
                {{$message}}
                </span>
                @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <button class="btn btn-success mt-4" type="submit">Submit</button>
    
        </form>
        </div>
        @endsection