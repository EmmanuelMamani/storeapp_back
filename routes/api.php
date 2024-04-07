<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\productoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Almacen
Route::get('almacenes', [AlmacenController::class, 'index'])->name('almacenes');
Route::get('almacenes/{id}', [AlmacenController::class, 'show'])->name('almacenes');
Route::put('almacenes/{id}', [AlmacenController::class, 'update'])->name('almacenes.update');
Route::delete('almacenes/{id}', [AlmacenController::class, 'delete'])->name('almacenes.delete');
Route::post('almacenes', [AlmacenController::class, 'create'])->name('almacenes.create');
//categoria
Route::get('categorias', [categoriaController::class, 'index'])->name('categorias');
Route::put('categorias/{id}', [categoriaController::class, 'update'])->name('categorias.update');
Route::delete('categorias/{id}', [categoriaController::class, 'delete'])->name('categorias.delete');
Route::post('categorias', [categoriaController::class, 'create'])->name('categorias.create');
//item
Route::get('items', [itemController::class, 'index'])->name('items');
Route::put('items/{id}', [itemController::class, 'update'])->name('items.update');
Route::delete('items/{id}', [itemController::class, 'delete'])->name('items.delete');
Route::post('items', [itemController::class, 'create'])->name('items.create');
//producto
Route::get('productos', [productoController::class, 'index'])->name('productos');
Route::put('productos/{id}', [productoController::class, 'update'])->name('productos.update');
Route::delete('productos/{id}', [productoController::class, 'delete'])->name('productos.delete');
Route::post('productos', [productoController::class, 'create'])->name('productos.create');