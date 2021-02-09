<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', ['App\Http\Controllers\CategoryController', 'index'])->name('categories')->middleware(['auth']);
Route::get('/categories/create',['App\Http\Controllers\CategoryController', 'create'])->middleware(['auth']);
Route::post('/categories/',['App\Http\Controllers\CategoryController', 'store'])->name('category_store')->middleware(['auth']);
Route::get('/categories/{category}',['App\Http\Controllers\CategoryController', 'show'])->middleware(['auth']);
Route::post('/categories/{category}',['App\Http\Controllers\CategoryController', 'update'])->name ('category_update')->middleware(['auth']);
Route::get('/categories/delete/{category}',['App\Http\Controllers\CategoryController', 'delete'])->middleware(['auth']);

Route::get('/products', ['App\Http\Controllers\ProductController', 'index'])->name('products')->middleware(['auth']);
Route::get('/products/create',['App\Http\Controllers\ProductController', 'create'])->middleware(['auth']);
Route::post('/products/',['App\Http\Controllers\ProductController', 'store'])->name('product_store')->middleware(['auth']);
Route::get('/products/{product}',['App\Http\Controllers\ProductController', 'show'])->middleware(['auth']);
Route::post('/products/{product}',['App\Http\Controllers\ProductController', 'update'])->name ('product_update')->middleware(['auth']);
Route::get('/products/delete/{category}',['App\Http\Controllers\ProductController', 'delete'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
