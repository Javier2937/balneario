<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

Route::post('/guardar-ticket', function (Request $request) {
    try {
        $data = $request->all();
        $ticketId = Str::uuid();
        $data['ticket_id'] = $ticketId;

        $path = storage_path("app/tickets/{$ticketId}.json");

        // PRUEBA de escritura
        if (!file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT))) {
            throw new \Exception("No se pudo escribir el archivo en $path");
        }

        return response()->json(['ticket' => $ticketId]);
    } catch (\Exception $e) {
        // Mostrar el error real que está ocurriendo
        return response()->json([
            'error' => $e->getMessage()
        ], 500);
    }
});
