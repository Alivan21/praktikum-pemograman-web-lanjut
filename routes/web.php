<?php

use App\Http\Controllers\MahasiswaController;
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

// Route::resource('/', MahasiswaController::class);
Route::group(['prefix' => '/'], function () {
  Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
  Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
  Route::post('/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
  Route::get('/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
  Route::put('/{mahasiswa}/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
  Route::get('/{mahasiswa}/destroy', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});
