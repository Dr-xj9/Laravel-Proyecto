<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Ruta base de la aplicación, redirige a la lista de contactos
Route::get('/', function () {
    return redirect()->route('contacts.index');
});

// Redirigir a la lista de contactos
Route::get('contacts', function () {
    return redirect()->route('contacts.index');
});

// Redirigir al formulario de creación de un nuevo contacto
Route::get('contacts/create', function () {
    return redirect()->route('contacts.create');
});

// Redirigir a la acción de almacenar un nuevo contacto
Route::post('contacts', function () {
    return redirect()->route('contacts.store');
});

// Redirigir a la vista de un contacto específico
Route::get('contacts/{id}', function ($id) {
    return redirect()->route('contacts.show', ['id' => $id]);
});

// Redirigir al formulario de edición de un contacto
Route::get('contacts/{id}/edit', function ($id) {
    return redirect()->route('contacts.edit', ['id' => $id]);
});

// Redirigir a la acción de actualizar un contacto
Route::put('contacts/{id}', function ($id) {
    return redirect()->route('contacts.update', ['id' => $id]);
});

// Redirigir a la acción de eliminar un contacto
Route::delete('contacts/{id}', function ($id) {
    return redirect()->route('contacts.destroy', ['id' => $id]);
});


Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index'); // Mostrar lista de contactos
Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create'); // Formulario para crear un nuevo contacto
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store'); // Guardar un nuevo contacto
Route::get('contacts/{id}', [ContactController::class, 'show'])->name('contacts.show'); // Mostrar un contacto específico
Route::get('contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit'); // Formulario para editar un contacto
Route::put('contacts/{id}', [ContactController::class, 'update'])->name('contacts.update'); // Actualizar un contacto
Route::delete('contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy'); // Eliminar un contacto