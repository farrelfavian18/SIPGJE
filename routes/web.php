<?php

use App\Http\Controllers\JabatanPelamarController;
use App\Http\Controllers\DataPelamarController;
use App\Http\Controllers\ProfileController;
use App\Models\JabatanPelamar;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('beranda.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/listpoisi',[JabatanPelamarController::class,'index'])->name('listposisi');

Route::get('/listposisi', function () {
    return view('listposisi.index');
});

Route::get('/layout', function () {
    return view('layout.master');
});

Route::get('/listposisi/edit', function () {
    return view('listposisi.edit');
});

Route::get('/formpendaftaran', function () {
    return view('formulirloker.index');
});

Route::get('/listpelamar', function () {
    return view('listpelamar.index');
});

Route::get('/listpoisi',[JabatanPelamarController::class,'index'])->name('listposisi.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
