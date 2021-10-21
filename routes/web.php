<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view("/register", 'register');
Route::get("/", [ProductController::class, 'index']);
Route::get("/product/{id}", [ProductController::class, 'detail']);
Route::get("/products", [ProductController::class, 'show']);
Route::post("/login", [UserController::class,'login']);
Route::post("/register", [UserController::class, 'create']);


