<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/admin/mahasiswa/add', [MahasiswaController::class, 'add'])->name('mahasiswa.add');
Route::post('/admin/mahasiswa', [MahasiswaController::class, 'daftar'])->name('mahasiswa.daftar');
Route::get('/admin/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/admin/mahasiswa/{mahasiswa}/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/admin/mahasiswa/{mahasiswa}/destroy', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin', function () {
        return view('admin');
    });
});


require __DIR__.'/auth.php';
