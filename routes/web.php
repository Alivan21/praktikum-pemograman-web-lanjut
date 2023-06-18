<?php

use App\Http\Controllers\KelasDropdownController;
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
  Route::get('/detail/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
  Route::get('/edit/{mahasiswa}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
  Route::put('/update/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
  Route::get('/destroy/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
  Route::get('/search', [MahasiswaController::class, 'search'])->name('mahasiswa.search');
  Route::get('/kelas/getKelasList/{id}', [KelasDropdownController::class, 'getKelas'])->name('kelas.getKelasList');
  Route::get('/detail/print/{mahasiswa}', [MahasiswaController::class, 'print'])->name('mahasiswa.print');
});
