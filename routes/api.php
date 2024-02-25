<?php

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
// 'middleware' => ['auth:sanctum']
Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'App\Http\Controllers\Api\V1', 'middleware' => ['auth:sanctum']], function () {
    Route::get('/user', function () {
        return auth()->user();
    });
});

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
    // Api Routes
    Route::get('/products', 'ProductsController@index');
    Route::get('/vacansy', 'VacancyController@index');
    Route::get('/news', 'BlogController@index');
    Route::get('/documents', 'DocumentController@index');
});

Route::post('login', [App\Http\Controllers\Api\Auth\AuthController::class, 'login']);
