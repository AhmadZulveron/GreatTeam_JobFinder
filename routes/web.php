<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginPelamarController;
use App\Http\Controllers\LoginPerusahaanController;
use App\Http\Controllers\LowonganPerusahaanController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
})->middleware(['auth', 'verified']);


// register //

Route::get('/registerp', [AuthController::class, 'register']);
Route::post('/registerp', [AuthController::class, 'registerProses']);
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/your-profile');
})->middleware(['auth', 'signed'])->name('verification.verify');

// end register //

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
})->middleware(['auth', 'verified']);

Route::get('/lowongan-bookmark', function () {
    return view('frontend.applicant.bookmark');
})->middleware(['auth', 'verified']);


Auth::routes(['verify' => true]);

Route::resource('perusahaan-lowongan', LowonganPerusahaanController::class);


Route::get('/login-perusahaan', [LoginPerusahaanController::class, 'login']);

Route::post('/login-perusahaan', [LoginPerusahaanController::class, 'athenticate']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
