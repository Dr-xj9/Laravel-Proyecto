<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Ruta base de la aplicación, redirige a la lista de contactos
Route::get('/', function () {
    return redirect()->route('contacts.index');
});
// Rutas para el CRUD de contactos
Route::resource('contacts', ContactController::class);
