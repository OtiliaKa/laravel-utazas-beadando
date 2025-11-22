<?php

use App\Models\ContactMessage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HelysegController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/database', [PageController::class, 'database'])->name('database');
Route::get('/chart', [PageController::class, 'chart'])->name('chart');
Route::resource('crud', HelysegController::class);


//Regisztráció, bejelentkezés


Route::get('/login', [PageController::class, 'handle'])->name('login');
Route::get('profil/logged-in', [PageController::class, 'logged-in']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/profil', [PageController::class, 'handle']);
Route::post('/profil', [PageController::class, 'authenticate']);






//Kapcsolat

Route::get('/kapcsolat', [ContactController::class, 'index'])->name('contact.form');
Route::middleware('auth')->group(function () {
    Route::post('/kapcsolat', [ContactController::class, 'store'])->name('contact.store');
});

//Szerepkör kezelés
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [PageController::class, 'admin'])->name('admin');
});

Route::middleware('auth')->group(function () {
    Route::get('/messages', function () {
        $messages = auth()->user()->usersMessages()->latest()->get();
        return view('messages', compact('messages'));
    });
});



