<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

// PageCOntroller
Route::get('/home', [PageController::class, 'index'])->name('index');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/UserLogin', [PageController::class, 'UserLogin'])->name('UserLogin');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
