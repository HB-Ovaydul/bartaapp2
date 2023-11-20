<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;


// Home page Route
Route::get('/',[HomeController::class,'showHomePage'])->name('home.page')->middleware('guest');
// Register Routes
Route::get('/register-page',[RegisterController::class,'showRegisterPage'])->name('register.page');
Route::post('/get-register',[RegisterController::class,'register'])->name('get.register');
// Login Route
Route::get('/login-page',[LoginController::class,'showLoginPage'])->name('login.page');
Route::post('/get-login',[LoginController::class,'Login'])->name('get.login');
Route::get('/logout',[LoginController::class,'Logout'])->name('user.logout')->middleware('auth');
