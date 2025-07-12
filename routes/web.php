<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuController;

Route::resource('branches', BranchController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('menu', MenuController::class);

Route::get('/', function () {
    return view('menu');
});
