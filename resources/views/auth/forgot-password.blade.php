{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
@extends('layouts.main')

@section('css','login.css')
@section('title','forget password')
@section('root')
<div class="login-wrapper">
        <div class="row m-auto justify-content-center login-section">
        <form method="POST" action="{{ route('password.email') }}" class="col-md-5 m-auto login-form p-5">
            @csrf
            <img src="/assets/image/logo.png" alt="" width="200px" class="d-flex m-auto">
            <div class="mt-4 mb-2 text-sm text-green-600">
                Lupa password? Tenang masukkan emailmu dan kami akan mengirimkan sesuatu di emailmu
            </div>
            <div>
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control" type="email" name="email" :value="{{ __('Email') }}" required autofocus />
            </div>
            <button class="btn btn-success mt-4" type="submit">Submit</button>
        </form>
     </div>
   </div>
@endsection
