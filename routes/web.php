<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/Home', [MainController::class, 'homeuser'])->middleware('auth');

// Register
Route::get('/Register', [MainController::class, 'register']);
Route::post('/Register', [MainController::class, 'daftar']);

// User
Route::get('/Login', [MainController::class, 'login'])->middleware('guest');
Route::post('/Login', [MainController::class, 'authenticate'])->name('login-user');
Route::get('/PilihKursus', [MainController::class, 'pilih_kursus'])->middleware('auth');
Route::get('/Kursus', [MainController::class, 'kursus'])->middleware('auth');
Route::get('/Profile', [MainController::class, 'profile'])->middleware('auth');
Route::get('/result', [MainController::class, 'result'])->middleware('auth');
Route::post('/Profile', [MainController::class, 'profile_updates'])->name('update_profile')->middleware('auth');
Route::post('/Logout', [MainController::class, 'logout']);

// Sub Course Inggris
Route::get('/Sub-Course', [MainController::class, 'subcourse'])->middleware('auth');
// Route::get('/Video-Pembelajaran', [MainController::class, 'videopembelajaran'])->middleware('auth');
Route::get('/Video-Pembelajaran', [GuruController::class, 'videopembelajaran'])->middleware('auth');
Route::get('/Latihan-Soal', [MainController::class, 'latihansoal'])->middleware('auth');

// Admin
Route::get('/Admin', [MainController::class, 'admin'])->middleware('is_admin');

// Guru
Route::get('/Guru', [MainController::class, 'guru'])->middleware('is_guru');
Route::post('/Update-Video', [GuruController::class, 'update_video'])->middleware('is_guru');
Route::post('/Feedback', [GuruController::class, 'feedback'])->middleware('is_guru');