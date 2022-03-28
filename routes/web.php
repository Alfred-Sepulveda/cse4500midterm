<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManufacturerSaleController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\SupportController
use App\Http\Controllers\ManufacturerSupportCont;  
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
Route::get('/supports', function () {
    return view('supports');
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

Route::resource('/supports', SupportController::class);

Route::resource('/manufacturersales', ManufacturerSaleController::class);

Route::resource('/manufacturersupports', ManufacturerSupportCont::class);

Route::fallback(function (){
    return view('fallback');
});
