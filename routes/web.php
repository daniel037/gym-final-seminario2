<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RutinaController;

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


Route::get('/', [HomeController::class, 'getHome']);

Route::get('/rutinas', [RutinaController::class, 'getRutinaList']);

Route::get('/showRutina/{id}', [RutinaController::class, 'getRutina']);

Route::group(['middleware' => 'auth'], function() {

    Route::get('/admin/newClient', [AdminController::class, 'getNew']);
    Route::post('/admin/newClient', [AdminController::class, 'postNew']);


    Route::get('/admin/studentList', [AdminController::class, 'getList']);


    Route::get('/admin/editClient/{id}', [AdminController::class, 'getEdit']);
    Route::put('/admin/editClient/{id}', [AdminController::class, 'putEdit']);

    Route::get('/admin/deleteClient/{id}', [AdminController::class, 'getDelete']);

    Route::get('/admin/student/{id}', [AdminController::class, 'getStudent']);

    Route::get('/admin/pago/{id}', [AdminController::class, 'getPago']);
    Route::put('/admin/pago/{id}', [AdminController::class, 'putPago']);

    Route::get('/admin/newRutina', [RutinaController::class, 'getNewRutina']);
    Route::post('/admin/newRutina', [RutinaController::class, 'postNewRutina']);

    Route::get('/admin/editRutina/{id}', [RutinaController::class, 'getEditRutina']);
    Route::put('/admin/editRutina/{id}', [RutinaController::class, 'putEditRutina']);
});


require __DIR__.'/auth.php';
