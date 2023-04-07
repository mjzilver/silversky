<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\SpaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioImageController;

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

Route::get('login', [UserController::class, 'showLogin'])->name('login');
Route::get('dashboard', [UserController::class, 'showLogin'])->name('dashboard');

Route::post('login', [UserController::class, 'login'])->name('login');

Route::resource('backend/services', 'App\Http\Controllers\ServicesController')->middleware('auth');
Route::resource('backend/portfolio', 'App\Http\Controllers\PortfolioController')->middleware('auth');

Route::get('/{any}', 'App\Http\Controllers\SpaController@index')->where('any', '.*')->middleware('auth');
