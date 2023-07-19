<?php

use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\FormController;
use App\Http\Controllers\Api\GenderController;
use App\Http\Controllers\Api\HobbyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('form/store', [FormController::class, 'store']);
Route::get('countries/index', [CountryController::class, 'index']);
Route::get('genders/index', [GenderController::class, 'index']);
Route::get('hobbies/index', [HobbyController::class, 'index']);
