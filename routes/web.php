<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatoController;

Route::get('/', function () {
    return redirect()->route('platos.index');
});

/*
|--------------------------------------------------------------------------
| Gestión de platos
|--------------------------------------------------------------------------
*/

Route::get('/platos', [PlatoController::class, 'index'])
    ->name('platos.index');

Route::get('/platos/crear', [PlatoController::class, 'create'])
    ->name('platos.create');

Route::post('/platos', [PlatoController::class, 'store'])
    ->name('platos.store');

Route::get('/platos/{plato}/editar', [PlatoController::class, 'edit'])
    ->name('platos.edit');

Route::put('/platos/{plato}', [PlatoController::class, 'update'])
    ->name('platos.update');

Route::delete('/platos/{plato}', [PlatoController::class, 'destroy'])
    ->name('platos.destroy');

Route::get('/platos/{plato}', [PlatoController::class, 'show'])
    ->name('platos.show');

/*
|--------------------------------------------------------------------------
| Menú público
|--------------------------------------------------------------------------
*/

Route::get('/menu', [PlatoController::class, 'menu'])
    ->name('menu');

Route::get('/menu/{plato}', [PlatoController::class, 'menuShow'])
    ->name('menu.show');