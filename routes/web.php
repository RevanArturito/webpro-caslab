<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/data', [DataController::class, 'index'])->name('data');
Route::post('/store', [DataController::class, 'store'])->name('data.store');
Route::delete('/delete/{id}', [DataController::class, 'destroy'])->name('data.destroy');

Route::get('/edit/{id}', [DataController::class, 'edit'])->name('data.edit');
Route::put('/update/{id}', [DataController::class, 'update'])->name('data.update');