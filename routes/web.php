<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register']);
Route::post('/register/post', [App\Http\Controllers\HomeController::class, 'post'])->name('register.post');
Route::get('/schedule', [App\Http\Controllers\HomeController::class, 'schedule'])->name('schedule');
Route::get('/competition', [App\Http\Controllers\HomeController::class, 'competition'])->name('competition');
Route::get('/tour', [App\Http\Controllers\HomeController::class, 'tour'])->name('tour');
