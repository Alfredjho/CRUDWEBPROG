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

use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;


Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
Route::get('/mahasiswas/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
Route::get('/mahasiswas/{id}/show', [MahasiswaController::class, 'showOne'])->name('mahasiswas.show');
Route::patch('/mahasiswas/{id}/update', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');
