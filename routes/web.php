<?php

use Illuminate\Support\Facades\Route;
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
Route::post('/Logout', [MainController::class, 'logout']);