<?php

use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;

Route::apiResource(name: 'products', controller: ProductController::class);
Route::apiResource(name: 'categories', controller: CategoryController::class);