<?php

use App\Http\Controllers\CourseController;
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
Route::get('/principlehome',[UserController::class,'principlehome'])->name('principlehome');
Route::get('/home',[UserController::class,'home'])->name('home');
Route::get('/',[UserController::class,'login'])->name('login');
Route::get('/signup',[UserController::class,'signup'])->name('signup');

Route::post('/Register',[UserController::class, 'Register'])->name('Register');
Route::post('/userLogin',[UserController::class, 'userLogin'])->name('userLogin');
Route::post('/addCourse',[CourseController::class, 'addCourse'])->name('addCourse');