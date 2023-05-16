<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\PertanyaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Registrasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

//Pertanyaan
Route::get('/pertanyaan', [PertanyaanController::class, 'index'])->name('home')->middleware('auth');
Route::get('/pertanyaan/create', [PertanyaanController::class, 'create'])->name('pertanyaan.create')->middleware('auth');
Route::post('/pertanyaan', [PertanyaanController::class, 'store'])->name('pertanyaan.store')->middleware('auth');

//jawaban
Route::post('/pertanyaan/{id}/jawaban', [JawabanController::class, 'store'])->name('jawaban.store')->middleware('auth');
