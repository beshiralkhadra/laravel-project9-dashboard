<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserTripController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('user', UserController::class);
Route::resource('trip', TripController::class);
Route::resource('userTrip', UserTripController::class);