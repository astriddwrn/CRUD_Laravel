<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cakeController;

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
//     return view('create');
// });

// Route::get('/', [cakeController::class, 'index']);
Route::get('/cake', [cakeController::class, 'create'])->name('cake.create');
Route::post('/cake', [cakeController::class, 'store'])->name('cake.store');
Route::get('/', [cakeController::class, 'show'])->name('cake.show');

Route::get('/cake/edit/{id}', [cakeController::class, 'edit'])->name('cake.edit');
Route::patch('/cake/{id}', [cakeController::class, 'update'])->name('cake.update');

Route::delete('/cake/{id}', [cakeController::class, 'destroy'])->name('cake.delete');