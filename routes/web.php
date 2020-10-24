<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\DashboardController;




Route::group(['prefix' => '/'], function () {
    Route::get('', [HomeController::class, 'home']);
    Route::get('pertanian', [HomeController::class, 'pertanian']);
    Route::get('perkebunan', [HomeController::class, 'perkebunan']);
    Route::get('hidroponik', [HomeController::class, 'hidroponik']);
    Route::get('pengembangan', [HomeController::class, 'pengembangan']);
    Route::get('materi', [HomeController::class, 'materi']);
});
Route::post('/feedback/post', [FeedbackController::class, 'store'])->name('feedback.post');

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/', 'verified'], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('/getuser', [DashboardController::class, 'getUser']);
    Route::get('register',function() {return view('auth.register');})->name('register');
});

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/dashboard', 'verified'], function () {
Route::post('/materi', [MateriController::class, 'store'])->name('tambah.materi');
});

