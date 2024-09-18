<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LidsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgodPasswordController;
use App\Http\Controllers\Auth\ResetForgodPasswordController;


Route::get('/', [MainController::class, 'index'])->middleware('guest')->name('index');
Route::get('/', [LidsController::class, 'index'])->name('index');

Route::get('/registration', [RegisterController::class, 'show'])->middleware('guest')->name('registration');
Route::post('/registration', [RegisterController::class, 'create']);

Route::get('/authorization', [LoginController::class, 'show'])->middleware('guest')->name('authorization');
Route::post('/authorization', [LoginController::class, 'login']);

Route::get('/forgot-password', [ForgodPasswordController::class, 'request'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ForgodPasswordController::class, 'get'])->middleware('guest')->name('password.get');

Route::get('/reset-password', [ResetForgodPasswordController::class, 'request'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ResetForgodPasswordController::class, 'change'])->middleware('guest')->name('password.change');

Route::post('/lids', [LidsController::class, 'add'])->name('lids.add');
Route::post('/lids/{lidId}', [LidsController::class, 'delete'])->name('lids.delete');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');