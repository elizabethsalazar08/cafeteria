<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/presentacion', function () {
    return view('editarPestaña');
});

Route::get('/ordenarProductos',
    [ProductoController::class,'getProductos']);

Route::get('/generarPedido',
    [PedidoController::class,'getOrdenado']);

Route::get('/agregarProducto/{id}',
    [PedidoController::class,'agregarProducto']);

Route::get('/ordenadoMas/{id}',
    [PedidoController::class,'masCantidad']);

Route::get('/ordenadoMenos/{id}',
    [PedidoController::class,'menorCantidad']);

Route::post('/grabarPedido',
[PedidoController::class,'grabarPedido']);

