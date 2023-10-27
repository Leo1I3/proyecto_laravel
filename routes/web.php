<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevolucionController;
use App\Http\Controllers\EquipoController;

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
Route::view('/devolucion','devolucion')->name('devolucion');
Route::view('/equipo','equipo')->name('equipo');
Route::view('/nosotros','nosotros')->name('nosotros');
Route::view('/prestamo','prestamo')->name('prestamo');

Route::get('/dev',[DevolucionController::class,'index'])->name('dev.index');

Route::post('/equipo',[EquipoController::class,'store'])->name('equipof');
//Route::post('/administrador',[AdministradorController::class,'store'])->name('administradorf');
Route::post('/prestamo',[prestamoController::class,'store'])->name('salidaf');
Route::post('/Devolucion',[DevolucionController::class,'store'])->name('devolucionf');
//Route::post('/usuario',[UsuarioController::class,'store'])->name('usuariof');

Route::post('/equipo',[EquipoController::class,'update'])->name('equipoff');
//Route::post('/administrador',[AdministradorController::class,'store'])->name('administradorff');
Route::post('/prestamo',[prestamoController::class,'update'])->name('salidaff');
Route::post('/Devolucion',[DevolucionController::class,'update'])->name('devolucionff');
//Route::post('/usuario',[UsuarioController::class,'update'])->name('usuarioff');

Route::post('/equipo',[EquipoController::class,'destroy'])->name('equipofff');
//Route::post('/administrador',[AdministradorController::class,'destroy'])->name('administradorfff');
Route::post('/prestamo',[prestamoController::class,'destroy'])->name('salidafff');
Route::post('/Devolucion',[DevolucionController::class,'destroy'])->name('devolucionfff');
//Route::post('/usuario',[UsuarioController::class,'destroy'])->name('usuariofff');
