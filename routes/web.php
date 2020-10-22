<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;



Route::group(['prefix' => '/'], function () {
    Route::get('', [HomeController::class, 'home']);
    Route::get('pertanian', [HomeController::class, 'pertanian']);
    Route::get('perkebunan', [HomeController::class, 'perkebunan']);
    Route::get('hidroponik', [HomeController::class, 'hidroponik']);
    Route::get('pengembangan', [HomeController::class, 'pengembangan']);
});
Route::post('/feedback/post', [FeedbackController::class, 'store'])->name('feedback.post');

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/', 'verified'], function () {
    Route::get('dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('register',function() {return view('auth.register');})->name('register');
});

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/dashboard', 'verified'], function () {
Route::post('/materi', [MateriController::class, 'store'])->name('tambah.materi');
});

