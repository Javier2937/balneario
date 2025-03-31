<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalnearioController;

Route::get('/', [BalnearioController::class, 'index']);
Route::get('/detalle/{id}', [BalnearioController::class, 'detalle']);
