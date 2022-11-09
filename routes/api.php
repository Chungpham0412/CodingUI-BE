<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/getUser', function (Request $request) {
    return $request->user();
});
Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'createUser']);
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'loginUser']);

//Route::resource('filter', App\Http\Controllers\Api\FilterController::class)->middleware('auth:sanctum');
Route::resource('filter', App\Http\Controllers\Api\FilterController::class);
Route::resource('card', App\Http\Controllers\Api\CardController::class);

Route::get('card/getCardByFilterId/{filter_id}', 'App\Http\Controllers\Api\CardController@getCardByFilterId')->name('getCardByFilterId');
