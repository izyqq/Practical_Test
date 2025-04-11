<?php

use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;

Route::apiResource('products', ProductController::class);
Route::apiResource('categories', CategoryController::class);
