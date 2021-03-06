<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\BabController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClassController;

use Illuminate\Http\Request;


Route::group(['prefix' => '/'], function () {
    Route::get('', [HomeController::class, 'home']);
    Route::get('/download/{ringkasan}', [HomeController::class, 'download']);
    Route::get('pertanian', [HomeController::class, 'pertanian']);
    Route::get('perkebunan', [HomeController::class, 'perkebunan']);
    Route::get('hidroponik', [HomeController::class, 'hidroponik']);
    Route::get('pengembangan', [HomeController::class, 'pengembangan']);
    Route::get('/materi/{slug}/{id}', [HomeController::class, 'materi']);
});

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/', 'verified'], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('register', function () {
        return view('auth.register');
    })->name('register');
});
Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/dashboard', 'verified'], function () {
    Route::get('user', [DashboardController::class, 'getUser']);
    Route::post('user', [DashboardController::class, 'destroy']);
    Route::get('kelas', [DashboardController::class, 'getKelas']);
    Route::get('tanggapan', [DashboardController::class, 'getTanggapan']);
    Route::post('hapus/tanggapan/{id}', [DashboardController::class, 'delTanggapan']);
    Route::get('komentar', [DashboardController::class, 'getKomen']);
    Route::get('komentar/balas/{id}', [DashboardController::class, 'balas']);
    Route::post('komentar', [DashboardController::class, 'postKomen']);
    Route::post('komentar/admin', [DashboardController::class, 'postKomenAdmin']);
    Route::delete('komen/{id}', [DashboardController::class, 'deleteKomen']);
});
Route::post('/dashboard/feedback/post', [FeedbackController::class, 'store'])->name('feedback.post');

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/dashboard/kelas/', 'verified'], function () {
    Route::get('tani', [ClassController::class, 'getTani']);
    Route::get('kebun', [ClassController::class, 'getKebun']);
    Route::get('hidroponik', [ClassController::class, 'getHidro']);
    Route::post('hidroponik', [ClassController::class, 'storeHidro']);
    Route::post('bab/tambah', [BabController::class, 'store'])->name('bab.post');
    Route::post('hapus/{id}', [BabController::class, 'delete'])->name('bab.delete');
});

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/dashboard/kelas/materi', 'verified'], function () {
    // Route::get('', [ClassController::class, 'materi']);
    Route::get('{slug}', [BabController::class, 'materi']);
    Route::post('post', [MateriController::class, 'store'])->name('materi.post');
    Route::get('hapus/{slug}', [MateriController::class, 'hapus']);
    Route::get('edit/{slug}', [MateriController::class, 'edit']);
    Route::post('edit/post', [MateriController::class, 'update'])->name('materi.update');
});
