<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Api\ProductController;

Route::get('/movies',[MovieController::class,'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);
Route::post('/movies', [MovieController::class, 'store']);
Route::put('/movies/{id}', [MovieController::class, 'update']);
// Route::put('/movies/update-rating',[MovieController::class,'updateMovies']);
Route::delete('/movies/{id}', [MovieController::class, 'destroy']);


// Route::apiResource('products',ProductsController::class);

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);