<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManufacturerSaleController;
use App\Http\Controllers\EquipmentController;
//use App\Http\Controllers\ManufacturerSupportCont;
//use App\Http\Controllers\TodosController;
use App\Http\Controllers\NotesController;

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
Route::get('/todos', function (){
    return view('todos');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/equipments', function () {
    return view('equipments');    
});





Route::resource('/equipments', EquipmentController::class);

Route::resource('/users', UserController::class);

Route::resource('/manufacturersales', ManufacturerSaleController::class);

Route::resource('/todos', TodoController::class);

Route::resource('/note', NotesController::class);



Route::fallback(function (){
    return view('fallback');
});
