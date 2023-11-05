<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
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



Route::get('/admin',[HomeController::class,'index'])->middleware('auth')->name('home');


Route::middleware('auth')->group(function () {
//Mahasiswa
    Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/admin/mahasiswa/add', [MahasiswaController::class, 'add'])->name('mahasiswa.add');
    Route::post('/admin/mahasiswa', [MahasiswaController::class, 'daftar'])->name('mahasiswa.daftar');
    Route::get('/admin/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/admin/mahasiswa/{mahasiswa}/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/admin/mahasiswa/{mahasiswa}/destroy', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
//DOSEN
    Route::get('/admin/dosen', [DosenController::class, 'index'])->name('dosen.index');
    Route::get('/admin/dosen/add', [DosenController::class, 'add'])->name('dosen.add');
    Route::post('/admin/dosen', [DosenController::class, 'daftar'])->name('dosen.daftar');
    Route::get('/admin/dosen/{dosen}/edit', [DosenController::class, 'edit'])->name('dosen.edit');
    Route::put('/admin/dosen/{dosen}/update', [DosenController::class, 'update'])->name('dosen.update');
    Route::delete('/admin/dosen/{dosen}/destroy', [DosenController::class, 'destroy'])->name('dosen.destroy');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';