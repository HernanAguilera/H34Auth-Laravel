<?php

use H34\Auth\Http\Controllers\PermissionsController;
use H34\Auth\Http\Controllers\RolesController;
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

Route::group([

   'middleware' => 'api',
   'prefix' => 'api/auth'

], function ($router) {

   Route::post('logup', '\H34\Auth\Http\Controllers\LogupController@execute');
   Route::post('login', '\H34\Auth\Http\Controllers\LoginController@execute');
   Route::post('logout', '\H34\Auth\Http\Controllers\LogoutController@execute');
   Route::post('refresh', '\H34\Auth\Http\Controllers\RefreshController@execute');
   Route::post('me', '\H34\Auth\Http\Controllers\MeController@execute');
   Route::post('reset-password', '\H34\Auth\Http\Controllers\ResetPasswordController@generate_token');
   Route::post('change-password', '\H34\Auth\Http\Controllers\ResetPasswordController@change_password')->name('password.reset');

   Route::controller(RolesController::class)
      ->prefix('roles')
      ->group(function () {
         Route::get('/', 'index');
      });

   Route::controller(PermissionsController::class)
      ->prefix('permissions')
      ->group(function () {
         Route::get('/', 'index');
      });
});
