<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ClienteController;
use App\Http\Controllers\GastosController;
use App\Http\Controllers\CajaController;
use App\Http\Controllers\UsersController;
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
    return view('home.index');
})->name('home')->middleware(['auth']);

 Route::middleware(['auth'])->group(function () {


    /* RUTAS DE CLIENTES */
    Route::get('clientes', [ClienteController::class,'index'])->name('cliente');
    Route::get('clientes/crear', [ClienteController::class,'create'])->name('cliente.crear');



    /* RUTAS DE CALCULADORA */
    Route::get('/calculator',function ()
    {
        # code...
        return view('calculator.index');
    })->name('calculator');


    /* RUTAS DE GASTOS */
    Route::get('/gastos',[GastosController::class,'index'])->name('gastos');
    Route::get('/gastos/crear',[GastosController::class,'create'])->name('gastos.crear');


    /* RUTAS DE CAJA */
    Route::get('/caja', [CajaController::class,'index'])->name('caja');
    Route::get('/caja/crear',[CajaController::class,'create'])->name('caja.create');

    /* RUTA DE RUTAS  */
    Route::get('/ruta',function ()
    {
        # code...
        return view('rute.index');
    })->name('routes');


    /* RUTAS DE USERS */
    
    Route::get('/users',[UsersController::class,'index'])->name('users');
    Route::get('/users/create',[UsersController::class,'create'])->name('users.create');
 });
 

 


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth']);



Auth::routes();

