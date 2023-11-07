<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginPelamarController;
use App\Http\Controllers\LoginPerusahaanController;
use App\Http\Controllers\LowonganPerusahaanController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/admin', function () {
    return view('backend.dashboard');
});

Route::get('/your-profile', function () {
    return view('frontend.applicant.jenisjob');
});

Route::get('/verify-your-account', function () {
    return view('frontend.verify');
});

Route::get('perusahaan-dashboard', [LowonganPerusahaanController::class, 'index2']);

Route::get('/perusahaan', function () {
    return view('frontend.applicant.perusahaan');
});

Route::get('/daftar-lowongan', function () {
    return view('frontend.loker');
});

Route::get('/daftar-perusahaan', function () {
    return view('frontend.perusahaan');
});

Route::get('/lowongan-explore', function () {
    return view('frontend.applicant.explore');
});

Route::get('/lowongan-foryou', function () {
    return view('frontend.applicant.foryou');
});

Route::get('/lowongan-bookmark', function () {
    return view('frontend.applicant.bookmark');
});


Auth::routes(['verify' => true]);

Route::resource('perusahaan-lowongan', LowonganPerusahaanController::class);

Route::resource('pelamar-register', UsersController::class);

// Route::get('/login', [LoginPelamarController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginPelamarController::class,'logout']);

Route::get('/login-perusahaan', [LoginPerusahaanController::class, 'login']);

Route::post('/login-perusahaan', [LoginPerusahaanController::class, 'athenticate']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
