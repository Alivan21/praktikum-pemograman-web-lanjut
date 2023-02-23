<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function ($id) {
  echo "Selamat Datang ini artikel ke $id";
});

Route::get('/about', function () {
  echo "Nama: Alfan Olivan <br> NIM: 2141720078";
});

Route::get('/articles/{id}', function ($id) {
  echo "Ini adalah artikel ke-$id";
});

Route::get('/hello', [WelcomeController::class, 'hello']);
