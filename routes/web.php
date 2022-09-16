<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\IngredientController;

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
    return view('main/app');
}); 

Route::get('pastel/agregar', [CakeController::class, 'create'])->name('cake.create');

Route::post('pastel/guardar', [CakeController::class, 'store'])->name('cake.store');

Route::get('pastel/lista', [CakeController::class, 'index'])->name('cake.index');

Route::get('pastel/{cake}/editar', [CakeController::class, 'edit'])->name('cake.edit');

Route::put('pastel/{cake}/actualizar', [CakeController::class, 'update'])->name('cake.update');

Route::delete('pastel/{cake}/eliminar', [CakeController::class, 'destroy'])->name('cake.destroy');

Route::get('ingredient/lista', [IngredientController::class, 'index'])->name('ingredient.index');

Route::get('ingredient/agregar', [IngredientController::class, 'create'])->name('ingredient.create');

Route::post('ingredient/guardar', [IngredientController::class, 'store'])->name('ingredient.store');

Route::get('ingredient/{ingredient}/editar', [IngredientController::class, 'edit'])->name('ingredient.edit');

Route::put('ingredient/{ingredient}/actualizar', [IngredientController::class, 'update'])->name('ingredient.update');

Route::delete('ingredient/{ingredient}/eliminar', [IngredientController::class, 'destroy'])->name('ingredient.destroy');
