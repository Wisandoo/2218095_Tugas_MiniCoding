<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PenggunaController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('dashboard-user', function () {
    return view('dashboard-user');
});
Route::get('dashboard-dokter', function () {
    return view('dashboard-dokter');
});
Route::get('login', function () {
    return view('login');
});
// Route untuk halaman login pasien
Route::get('Pasien/login-user', [PasienController::class, 'showLogin'])->name('pasien.login');

// Route untuk halaman dashboard pasien
Route::get('Pasien/dashboard-user', [PasienController::class, 'showDashboard'])->name('pasien.dashboard');

// Route untuk halaman login dokter
Route::get('Dokter/login-dokter', [DokterController::class, 'showLogin'])->name('dokter.login');

// Route untuk halaman dashboard dokter
Route::get('Dokter/dashboard-dokter', [DokterController::class, 'showDashboard'])->name('dokter.dashboard');

// Route untuk halaman register pasien
Route::get('Pasien/register-user', [PasienController::class, 'showRegister'])->name('pasien.register');

// Route untuk halaman register dokter
Route::get('Dokter/register-dokter', [DokterController::class, 'showRegister'])->name('dokter.register');

Route::resource('penggunas', PenggunaController::class);
Route::resource('penggunas', PenggunaController::class);
Route::get('/dokter/pdf', [DokterController::class, 'generatePDF']);


