<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevolucionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','welcome')->name('inicio');
Route::get('/dev',[DevolucionController::class,'index'])->name('dev.index');
Route::get('/detalle',[DevolucionController::class,'create'])->name('detallesalida');

Route::view('/devolucion','devolucion')->name('devolucion');
Route::view('/equipo','equipo')->name('equipo');
Route::view('/nosotros','nosotros')->name('nosotros');
Route::view('/prestamo','prestamo')->name('prestamo');
