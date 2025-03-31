<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalnearioController;

Route::get('/', [BalnearioController::class, 'index']);
Route::get('/detalle/{id}', [BalnearioController::class, 'detalle']);
Route::get('/login', function () {
    return view('balneario.login');
})->name('login');

Route::post('/login', [BalnearioController::class, 'login']);
Route::get('/logout', [BalnearioController::class, 'logout']);
