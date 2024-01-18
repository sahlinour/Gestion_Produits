<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/stagiaire/{o}', function ($o) {
    return "<h2>le nom du stagiaire '$o' </h2>";
});

Route::get('/classe/{g}/stagiaire/{o}', function ($g,$o) {
    return "<h2>le nom du stagiaire '$o' à la classe '$g' </h2>";
});
Route::get('/', [WelcomeController::class, 'index']);