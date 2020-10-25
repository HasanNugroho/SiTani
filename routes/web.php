<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\BabController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClassController;

use Illuminate\Http\Request;




// Route::get('/ujicoba', [BabController::class, 'index']);
// Route::post('/ujicoba/bab/post', [BabController::class, 'store'])->name('ujicoba.post');
// Route::post('/ujicoba/materi/post', [MateriController::class, 'store'])->name('tambah.materi');

// Route::post('/ujicoba/post', function (Request $request) {
//     dd($request->all());
// });
Route::group(['prefix' => '/'], function () {
    Route::get('', [HomeController::class, 'home']);
    Route::get('/download/{path}', [HomeController::class, 'download']);
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
    Route::get('komentar', [DashboardController::class, 'getKomen']);
    Route::post('komentar', [DashboardController::class, 'postKomen']);
    Route::delete('komentar', [DashboardController::class, 'deleteKomen']);

    Route::post('/feedback/post', [FeedbackController::class, 'store'])->name('feedback.post');
});

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/dashboard/kelas/', 'verified'], function () {
    Route::get('tani', [ClassController::class, 'getTani']);
    Route::get('kebun', [ClassController::class, 'getKebun']);
    Route::get('hidroponik', [ClassController::class, 'getHidro']);
    Route::post('hidroponik', [ClassController::class, 'storeHidro']);
    Route::post('bab/tambah', [BabController::class, 'store'])->name('bab.post');
});

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/dashboard/kelas/materi', 'verified'], function () {
    // Route::get('', [ClassController::class, 'materi']);
    Route::get('{slug}', [BabController::class, 'materi']);
    Route::post('post', [MateriController::class, 'store'])->name('materi.post');
    Route::get('hapus/{slug}', [MateriController::class, 'hapus']);
    Route::get('edit/{slug}', [MateriController::class, 'edit']);
    Route::post('edit/post', [MateriController::class, 'update'])->name('materi.update');
});
