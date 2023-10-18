<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tourist\TouristController;

Route::prefix('tourist')->name('tourist.')->group(function () {

  Route::middleware(['guest:tourist', 'PreventBackHistory'])->group(function () {
    Route::view('/register', 'dashboard.tourist.register')->name('register');
    Route::post('/create', [TouristController::class, 'create'])->name('create');
    Route::view('/login', 'dashboard.tourist.login')->name('login');
    Route::post('/check', [TouristController::class, 'check'])->name('check');
  });

  Route::middleware(['auth:tourist', 'PreventBackHistory'])->group(function () {
    Route::view('/home', 'dashboard.tourist.home')->name('home');
    Route::post('/logout', [TouristController::class, 'logout'])->name('logout');
  });
});