<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\EventController;
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
Route::get('/manufacturersupport', function () {
    return view('manufacturersupport');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/equipment', function () {
    return view('equipment');    
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
Route::resource('/equipment', EquipmentController::class);

Route::resource('/users', UsersController::class);

Route::resource('/manufacturersales', ManufacturerSalesEventController::class);

Route::resource('/manufacturersupport', ManufacturerSupportController::class);

Route::fallback(function (){
    return view('fallback');
});
