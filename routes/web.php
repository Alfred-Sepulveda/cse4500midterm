<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManufacturerSaleController;
use App\Http\Controllers\ManufacturerSupportController;
use App\Http\Controllers\EquipmentController;

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
Route::get('/manufacturersales', function () {
    return view('manufacturersales');
});
Route::get('/manufacturersupports', function () {
    return view('manufacturersupports');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/equipments', function () {
    return view('equipments');    
});


Route::get('/db-test', function (){
    try {
        echo \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        echo 'None';
    }
});
Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});
Route::resource('/equipments', EquipmentController::class);

Route::resource('/users', UserController::class);

Route::resource('/manufacturersales', ManufacturerSaleController::class);

Route::resource('/manufacturersupports', ManufacturerSupportController::class);

Route::fallback(function (){
    return view('fallback');
});
