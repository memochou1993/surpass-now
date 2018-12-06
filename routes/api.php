<?php

use Illuminate\Http\Request;

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

Route::prefix('/users/me')->group(function () {
    Route::get('/', 'UserController@show');
    Route::resource('/categories', 'CategoryController')->only(['index', 'show']);
    Route::resource('/items', 'ItemController')->only(['index', 'show']);
    Route::resource('/units', 'UnitController')->only(['index', 'show']);
    Route::resource('/records', 'RecordController')->only(['index', 'show']);
});
