<?php

use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tarea/{tarea}/ver', [TareaController::class, 'show'])->name('tarea.show');
Route::get('tarea/registrar', [TareaController::class, 'create'])->name('tarea.create');
Route::post('tarea/guardar', [TareaController::class, 'store'])->name('tarea.store');
Route::get('tarea/listar', [TareaController::class, 'index'])->name('tarea.index');
Route::get('tarea/{tarea}/editar', [TareaController::class, 'edit'])->name('tarea.edit');
Route::put('tarea/{tarea}/actualizar', [TareaController::class, 'update'])->name('tarea.update');
Route::delete('tarea/{tarea}/eliminar', [TareaController::class, 'destroy'])->name('tarea.destroy');



