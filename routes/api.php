<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    /*****Basic Settings******/
    Route::get('countries', [BasicController::class, 'countries']);
    Route::get('industries', [BasicController::class, 'industries']);
    Route::get('products', [BasicController::class, 'products']);
    Route::get('test', [BasicController::class, 'test']);
    /*****Basic Settings End*****/
    Route::post('signup', [UserController::class, 'signup']);

    /****middleware:api******/
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('user', function (Request $request) {
            return $request->user();
        });
        //user
        Route::post('new-user-create', [UserController::class, 'newUserCreate']);
        Route::post('user-profile', [UserController::class, 'userProfile']);
        Route::get('user-access-info', [UserController::class, 'userAccessInfo']);
        Route::post('logout',[UserController::class,'logout']);
        //company
        Route::post('company-register', [CompanyController::class, 'companyRegister']);
        Route::get('get-company-count', [CompanyController::class, 'getCompanyCount']);
        //product
        Route::post('product-purchase', [ProductController::class, 'productPurchase']);
        Route::get('get-products-default', [ProductController::class, 'getProductsDefault']);
        Route::get('get-products', [ProductController::class, 'getProducts']);
    });


    /*****middleware:api END*****/

});




