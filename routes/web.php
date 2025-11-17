<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HelysegController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/database', [PageController::class, 'database'])->name('database');
Route::get('/chart', [PageController::class, 'chart'])->name('chart');
Route::resource('crud', HelysegController::class);