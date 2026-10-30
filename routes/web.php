<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/polityka-prywatnosci', [PageController::class, 'privacy'])->name('privacy');
Route::get('/cookies', [PageController::class, 'cookies'])->name('cookies');

Route::post('/kontakt', [ContactController::class, 'store'])
    ->middleware('throttle:3,10')
    ->name('contact.store');
