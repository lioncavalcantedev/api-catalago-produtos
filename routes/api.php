<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/products', [ProductController::class, 'listProducts']);
Route::get('/products', [ProductController::class, 'getProduct']);
Route::get('/products', [ProductController::class, 'createProduct']);
Route::get('/products', [ProductController::class, 'updateProduct']);
Route::get('/products', [ProductController::class, 'deleteProduct']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
