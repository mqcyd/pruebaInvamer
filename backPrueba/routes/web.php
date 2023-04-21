<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\administrativosController;
use App\Http\Controllers\LoginController;

Route::get('/pruebainvamer/listaempleados',[usuariosController::class,'getEmpleados']);
Route::get('/pruebainvamer/listaempleados1',[usuariosController::class,'getEmpleadosEstado1']);
Route::get('/pruebainvamer/listaempleados0',[usuariosController::class,'getEmpleadosEstado0']);
Route::post('/pruebainvamer/crearUsuario',[usuariosController::class,'crearUsuario']);
Route::post('/pruebainvamer/crearAdministrador',[administrativosController::class,'crearAdministrativo']);
Route::post('/login', [LoginController::class,'login']);
// Route::post('/pruebainvamer/createuser','usuariosController@getEmpleados');

Route::get('/', function () {
    return view('welcome');
});
