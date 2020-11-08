<?php

use Illuminate\Support\Facades\Route;

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
//Ruta /
Route::get('/principal', function () {
	return view('principal');
    //return "Bienvenidos al Hotel la Rivera";
});
//Ruta hotel/historia
Route::get('hotel/historia', function () {
    return view('hotel.historia');
    //return "Creado en 2011";
});
// Ruta hotel/mision-vision
Route::get('hotel/mision', function () {
    return view('hotel.mision');
    //return "Misión y Visión";
});
//Ruta hotel/ubicación
Route::get('hotel/ubicacion', function () {
    return view('hotel.ubicacion');
    //return "Ubicado en Cartagena de Indias";
});
//Ruta servicios/habitaciones
Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');
    //return "Habitaciones tipo Estándar,Superior, Ejecutiva, Suite";
});
//Ruta servicios/eventos/{$id} => parametros
Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios.eventos', array('id' => $id));
    //return "Eventos". $id;
});
//Ruta reservas
Route::get('reservas/reservas', function () {
    return view('reservas.reservas');
    //return "Reservas";
});
//Ruta contacto
Route::get('contactenos/contactenos', function () {
    return view('contactenos.contactenos');
    //return "Contactos";
});