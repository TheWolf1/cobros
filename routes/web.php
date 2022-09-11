<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ClienteController;
use App\Http\Controllers\GastosController;
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
})->name('home');

 Route::middleware(['auth'])->group(function () {


    Route::get('clientes', [ClienteController::class,'index'])->name('cliente');
    Route::get('clientes/crear', [ClienteController::class,'create'])->name('cliente.crear');
    Route::get('/calculator',function ()
    {
        # code...
        return view('calculator.index');
    })->name('calculator');

    Route::get('/gastos',[GastosController::class,'index'])->name('gastos');



 });
 

 


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

