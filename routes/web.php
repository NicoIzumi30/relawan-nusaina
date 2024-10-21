<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SendController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/daftar',[HomeController::class, 'daftar'])->name('daftar');
Route::post('/send', [SendController::class, 'store'])->name('send');
Route::get('/success', function () {
    return view('success');
})->name('success');
Route::get('get-kelurahan/{id}', [HomeController::class, 'getKelurahan'])->name(name: 'get-kelurahan');
Route::get('get-tps/{id}', [HomeController::class, 'getTps'])->name(name: 'get-tps');
