<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;


use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/photos', [PhotoController::class, 'index']);
Route::get('/stagiaire/{o}', function ($o) {
    return "<h2>le nom du stagiaire '$o' </h2>";
});

Route::get('/classe/{g}/stagiaire/{o}', function ($g,$o) {
    return "<h2>le nom du stagiaire '$o' à la classe '$g' </h2>";
});
Route::get('/', [WelcomeController::class, 'index']);


Route::get('/photos/majorant', [PhotoController::class, 'majorant']);
Route::resource('/photos', PhotoController::class);

use App\Http\Middleware\Dev202 ;
Route::get('/', function () {
    return 'Hello';

})->middleware('role');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
