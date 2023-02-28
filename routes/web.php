<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ApartmentControllerController;
use \App\Http\Controllers\ClientController;
use \App\Http\Controllers\SaleController;

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
Route::get('/houses/{id}/apartments', [HouseController::class, 'showApartments']);
Route::resource('houses', HouseController::class);

Route::get('/clients/{id}/apartments', [ClientController::class, 'showApartments']);
Route::resource('clients', ClientController::class);

Route::get('/clients/{id}/apartments', [ApartmentController::class, 'showApartments']);
Route::resource('clients', ApartmentController::class);
