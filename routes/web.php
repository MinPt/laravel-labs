<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ManufacturerController;
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

Route::get('/', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about']);

// Route::get('/products', [ProductsController::class, 'index']);
// Route::post('/products', [ProductsController::class, 'store']);
// Route::get('/products/{id}', [ProductsController::class, 'show']);
// Route::delete('/products/{id}', [ProductsController::class, 'destroy']);
// Route::get('/products/{id}/edit', [ProductsController::class, 'edit']);
// Route::patch('/products/{id}', [ProductsController::class, 'update']);
// Route::get('/products/create', [ProductsController::class, 'create']);
Route::resource('/manufacturers', ManufacturerController::class);
Route::resource('/products',  ProductsController::class);
Route::get('/products-json', [ProductsController::class, 'productsJson']);
