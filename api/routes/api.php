<?php

use App\Http\Controllers\AppointmentController;

Route::apiResource('appointments', AppointmentController::class);

// Endpoint que gera um erro 500 (Internal Server Error)
Route::get('/error-500', function () {
    abort(500, 'Erro interno do servidor');
});

// Endpoint que gera um erro 422 (Unprocessable Entity)
Route::get('/error-422', function () {
    return response()->json([
        'error' => 'Erro de validação',
    ], 422);
});

// Endpoint que gera um erro 403 (Forbidden)
Route::get('/error-403', function () {
    abort(403, 'Acesso proibido');
});

// Endpoint que gera um erro 404 (Not Found)
Route::get('/error-404', function () {
    abort(404, 'Recurso não encontrado');
});