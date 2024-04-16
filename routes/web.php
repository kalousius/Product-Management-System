<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return redirect()->route('login');
});

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Product routes
Route::get('/product', [ProductController::class, 'index'])->name('product.index'); // Route for displaying a list of products
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create'); // Route for displaying a form to create a new product
Route::post('/product', [ProductController::class, 'store'])->name('product.store'); // Route for storing a newly created product
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');

// Dashboard routes
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Category routes
Route::get('/category', [CategoryController::class, 'index'])->name('category.index'); // Route for displaying a list of categories
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create'); // Route for displaying a form to create a new category
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');

Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
// Route for storing a newly created category
// Add more category routes as needed (e.g., edit, update, destroy)Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');