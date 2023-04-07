<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontServicesController;
use App\Http\Controllers\FrontPortfolioController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/services', 'App\Http\Controllers\FrontServicesController@index');
Route::get('/services/{id}', 'App\Http\Controllers\FrontServicesController@show');

Route::get('/portfolio', 'App\Http\Controllers\FrontPortfolioController@index');
Route::get('/portfolio/{id}', 'App\Http\Controllers\FrontPortfolioController@show');
