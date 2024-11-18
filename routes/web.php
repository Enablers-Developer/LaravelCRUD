<?php

use App\Http\Controllers\Auth\CreateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('auth')->group(function () {
    Route::get('/signup', [RegisterController::class, 'showForm'])->name('signup');
    Route::post('/signup', [RegisterController::class, 'signup'])->name('signup.submit');
    
    Route::get('/login', [LoginController::class, 'showForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::get('/create', [CreateController::class, 'showForm'])->name('create');
    Route::post('/create', [CreateController::class, 'create']);
    
    Route::get('edit/{id}', [CreateController::class, 'edit'])->name('course.edit');
    Route::put('/update/{id}', [CreateController::class, 'update'])->name('course.update');
});

Route::get('/', [CreateController::class, 'home'])->name('home');
Route::delete('course/{id}', [CreateController::class, 'delete'])->name('course.delete');


Route::middleware('auth')->get('/logout', [LoginController::class, 'logout'])->name('logout');