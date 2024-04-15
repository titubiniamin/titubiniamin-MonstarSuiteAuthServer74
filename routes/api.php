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


Route::prefix('suite')->group(function () {
    /*middleware:custom-auth-api*/
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('user', function (Request $request) {
            return $request->user();
        });
    });
    /*middleware:custom-auth-api END*/

});

Route::middleware('auth:api')->get('/suite/products', function (Request $request) {
    return \App\Product::all();
//    return \App\User::all();
});
Route::middleware('auth:api')->get('/suite/products', function (Request $request) {
    return \App\Product::all();
//    return \App\User::all();
});


