<?php

use App\Http\Controllers\formsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\usersController;
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



Route::get('/', [usersController::class, 'index'])->name('users');
Route::resource('users',usersController::class);
//Route::post('/users/store', [usersController::class , 'store'])->name('users.store');
Route::get('/formulaire', [formsController::class, 'index'])->name('form');
//Route::get('/users/{user}/edit',[usersController::class, 'edit'])->name('users.edit');
//Route::put('/users/{user}/update',[usersController::class, 'update'])->name('users.update');
//Route::delete('/users/{user}/destroy',[usersController::class, 'destroy'])->name('users.destroy');
Route::get('/nousers', [usersController::class, 'index'])->name('nousers');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/vue', [formsController::class, 'vue'])->name('vue.index');
Route::get('/setup', [formsController::class, 'projet'])->name('projet.setup');