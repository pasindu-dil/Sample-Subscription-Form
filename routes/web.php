<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UpgradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/upgrades/{name}/{price}', [UpgradeController::class, 'index']);

Route::resource('/payments', PaymentController::class);
