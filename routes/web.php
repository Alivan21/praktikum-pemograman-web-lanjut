<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\WelcomeController;
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
  return view('index');
});

Route::get('/about', function () {
  return view('about');
});

Route::group(['prefix' => 'products'], function () {
  Route::get('/', [ProductsController::class, 'index'])->name('products');
  Route::get('/{id}', [ProductsController::class, 'detail']);
});

Route::group(['prefix' => 'news'], function () {
  Route::get('/', [NewsController::class, 'index'])->name('news');
  Route::get('/{id}', [NewsController::class, 'detail']);
});

Route::group(['prefix' => 'program'], function () {
  Route::get('/', [ProgramController::class, 'index'])->name('programs');
  Route::get('/{id}', [ProgramController::class, 'detail']);
});

Route::resource('contact', ContactController::class)->names([
  'index' => 'contact'
]);
