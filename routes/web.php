<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index'); // Route for displaying a list of products
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');//Route for displaying a form to create a new product
Route::post('/product', [ProductController::class, 'store'])->name('product.store'); //Route for storing a newly created product
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');