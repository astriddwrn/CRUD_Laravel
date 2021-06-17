<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cakeController;
use App\Http\Controllers\chefController;
use App\Http\Controllers\adminController;

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
Route::get('/', function(){
    return view('index');
});

Route::get('/cake/create', [cakeController::class, 'create'])->name('cake.create');
Route::post('/cake/create', [cakeController::class, 'store'])->name('cake.store');
Route::get('/cake', [cakeController::class, 'index'])->name('cake.index');

Route::get('/cake/edit/{id}', [cakeController::class, 'edit'])->name('cake.edit');
Route::patch('/cake/{id}', [cakeController::class, 'update'])->name('cake.update');

Route::delete('/cake/{id}', [cakeController::class, 'destroy'])->name('cake.delete');


Route::get('/chef/create', [chefController::class, 'create'])->name('chef.create');
Route::post('/chef/create', [chefController::class, 'store'])->name('chef.store');
Route::get('/chef', [chefController::class, 'index'])->name('chef.index');

Route::get('/chef/edit/{id}', [chefController::class, 'edit'])->name('chef.edit');
Route::patch('/chef/{id}', [chefController::class, 'update'])->name('chef.update');

Route::delete('/chef/{id}', [chefController::class, 'destroy'])->name('chef.delete');
Route::get('/chef/detail/{id}', [chefController::class, 'detail'])->name('chef.detail');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'admin'])->group(function(){
    Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
});