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

Route::get('/admin/newClient', [AdminController::class, 'getNew']);

Route::get('/admin/studentList', [AdminController::class, 'getList']);

Route::get('/admin/editClient/{id}', [AdminController::class, 'getEdit']);

Route::get('/admin/student/{id}', [AdminController::class, 'getStudent']);

Route::get('/admin/pago/{id}', [AdminController::class, 'getPago']);

Route::get('/rutinas', [RutinaController::class, 'getRutinaList']);

Route::get('/admin/newRutina', [RutinaController::class, 'getNewRutina']);

Route::get('/admin/editRutina', [RutinaController::class, 'getEditRutina']);

Route::get('/showRutina/{id}', [RutinaController::class, 'getRutina']);


require __DIR__.'/auth.php';
