<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalnearioController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

// Rutas principales
Route::get('/', [BalnearioController::class, 'index']);
Route::get('/detalle/{id}', [BalnearioController::class, 'detalle']);
Route::get('/login', function () {
    return view('balneario.login');
})->name('login');
Route::post('/login', [BalnearioController::class, 'login']);
Route::get('/logout', [BalnearioController::class, 'logout']);
Route::get('/tickets', [BalnearioController::class, 'verTickets']);

// 🧾 Ruta para guardar el ticket
Route::post('/guardar-ticket', function (Request $request) {
    try {
        $data = $request->all();
        $ticketId = Str::uuid();
        $data['ticket_id'] = $ticketId;

        $path = storage_path("app/tickets/{$ticketId}.json");

        if (!file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT))) {
            throw new \Exception("No se pudo escribir el archivo en $path");
        }

        return response()->json(['ticket' => $ticketId]);
    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Error al guardar el ticket: ' . $e->getMessage()
        ], 500);
    }
});
