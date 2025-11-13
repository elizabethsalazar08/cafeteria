<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/presentacion', function () {
    return view('editarPestaña');
});

Route::get('/ordenarProductos',
    [ProductoController::class,'getProductos']);
