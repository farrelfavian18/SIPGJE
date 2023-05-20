<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPositionController;

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

Route::get('/layout', function () {
    return view('layout.master');
});

Route::get('admin/dashboard', function () {
    return view('beranda.index');
});

Route::get('admin/listposisi', function () {
    return view('listposisi.index');
});

Route::get('/jobposition',[JobPositionController::class, 'index'])->name('jobposition');