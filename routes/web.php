<?php

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

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthorizationController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/signup', [SignupController::class, 'signup'])->name('signup');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/developers',function (){
    return view('developers');
})->middleware('web');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/oauth/authorize', [CustomAuthorizationController::class, 'authorize']);

Route::get('/email/verify/{id}/{hash}', 'Auth\CustomVerificationController@verify')->name('verification.verify');
Route::get('/email/resend', 'Auth\CustomVerificationController@resend')->name('verification.resend');
Route::get('oauth2/jwks', 'CustomAuthorizationController@jwks');
Route::get('.well-known/oauth-authorization-server', 'CustomAuthorizationController@metadata');

