<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
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


Route::get('/',[RouteController::class,'welcome_view']);

Route::get('/signin',[RouteController::class,'signin_view'])->name('login');
Route::get('/signup',[RouteController::class,'signup_view'])->name('register');

Route::post('/signin',[UserController::class,'signin']);
Route::post('/signup',[UserController::class,'signup']);