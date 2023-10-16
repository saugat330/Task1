<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home',[UserController::class,'home'])->name('home');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/signup',[UserController::class,'signup'])->name('signup');

Route::post('/Register',[UserController::class, 'Register'])->name('Register');
Route::post('/userLogin',[UserController::class, 'userLogin'])->name('userLogin');