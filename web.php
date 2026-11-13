<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CarritoController;

/*
|--------------------------------------------------------------------------
| RUTAS DEL CLIENTE FINAL (SIN BASE DE DATOS LOCAL - CONSUMO API REST)
|--------------------------------------------------------------------------
*/

// 🏠 1. Página de Inicio
Route::get('/', [PaginasController::class, 'inicio']);
Route::get('/inicio', [PaginasController::class, 'inicio']);

// 👥 2. Página Nosotros
Route::get('/nosotros', [PaginasController::class, 'nosotros']);

// 🛍️ 3. Catálogo de productos (Consumiendo GET /api/productos)
Route::get('/catalogo', [CatalogoController::class, 'index']);

// 📦 4. Detalle del producto con las 3 imágenes (Consumiendo GET /api/productos/{id})
Route::get('/catalogo/detalle/{id}', [CatalogoController::class, 'show']);

// 📩 5. Página Contacto
Route::get('/contacto', [PaginasController::class, 'contacto']);

// 🛒 6. RUTAS DEL CARRITO DE COMPRAS (GESTIONADO VÍA SESIÓN)
Route::get('/carrito', [CarritoController::class, 'index']);
Route::post('/carrito/agregar/{id}', [CarritoController::class, 'agregar']);
Route::post('/carrito/actualizar/{id}', [CarritoController::class, 'actualizar']);
Route::get('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar']);
Route::post('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar']);
Route::get('/carrito/vaciar', [CarritoController::class, 'vaciar']);
Route::post('/carrito/vaciar', [CarritoController::class, 'vaciar']);
