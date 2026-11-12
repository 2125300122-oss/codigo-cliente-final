<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\CatalogoController;

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
