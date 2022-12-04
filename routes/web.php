<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;

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

//==================Authorization Routes ===================
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('signup', [HomeController::class, 'signup'])->name('register');
Route::post('login', [AuthController::class, 'loginuser'])->name('loginuser');
Route::post('signup', [AuthController::class, 'registeruser'])->name('signupuser');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', [ImageController::class, 'index'])->name('index');
Route::get('/images/{image}', [ImageController::class, 'show'])->name('show');
Route::get('/image', [ImageController::class, 'create'])->name('create');
Route::post('/image', [ImageController::class, 'store'])->name('store');
///==================== My Page =============================

Route::get('/myimages', [ImageController::class, 'showmyimages'])->name('myimages')->middleware('auth');
Route::get('/delete/{id}', [ImageController::class, 'delete'])->name('delete')->middleware('auth');

Route::get('/show/{id}', [ImageController::class, 'show'])->name('show');
