<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginPelamarController;
use App\Http\Controllers\LoginPerusahaanController;
use App\Http\Controllers\LowonganPerusahaanController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplyingJobsController;
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

// setting up profile

Route::resource('/your-profile', UserProfileController::class);

Route::get('/profile', [UserProfileController::class, 'profile']);

Route::get('/upload', function(){
    return view('frontend.applicant.upload');
});


// register //

Route::get('/registrasi', [AuthController::class, 'register']);
Route::post('/registrasi', [AuthController::class, 'registerProses']);
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/your-profile');
})->middleware(['auth', 'signed'])->name('verification.verify');

// end register //

Route::get('/login', [LoginPelamarController::class,'login'])->name('login');

Route::post('/login', [LoginPelamarController::class,'authenticate']);

Route::post('/logout', [LoginPelamarController::class,'logout']);

//pdf
Route::get('/export_pemohon_pdf', [ApplyingJobsController::class,'export_pemohon'])->name('export_pemohon');
//endpdf

Route::get('perusahaan-dashboard', [LowonganPerusahaanController::class, 'index2']);

Route::resource('pemohon', ApplyingJobsController::class);

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


// Auth::routes(['verify' => true]);

Route::resource('perusahaan-lowongan', LowonganPerusahaanController::class);


Route::get('/login-perusahaan', [LoginPerusahaanController::class, 'login']);

Route::post('/login-perusahaan', [LoginPerusahaanController::class, 'athenticate']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
