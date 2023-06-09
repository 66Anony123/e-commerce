<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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
    dd("Welcome");
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'authenticate']
);

Route::get('/home',[HomeController::class,'index']);

Route::get('/about',function(){
    return view('about');
});

Route::get('/product/{slog}',[ProductController::class,'show']);

Route::get('/categories',[CategoryController::class,'getAction']);

Route::get('/products',[ProductController::class,'index']);