<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvionesController;
use App\Http\Controllers\VuelosController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {

    //Usar los metodos del controlador en las rutas

});

Route::resource('vuelos', VuelosController::class);

Route::resource('aviones', AvionesController::class);

// Vuelos

//Ruta para consultar vuelos registrados
Route::get('vuelo/{id}/edit', [
    VuelosController::class,
    'edit'
])->name('vuelos.edit');

//Ruta para actualizar la informacion de un vuelo
Route::put('vuelo/{id}', [
    VuelosController::class,
    'update'
])->name('vuelos.update');


//Aviones

//Ruta para consultar aviones registrados
Route::get('avion/{id}/edit', [
    AvionesController::class,
    'edit'
])->name('aviones.edit');

//Ruta para actualizar la informacion de un avion
Route::put('avion/{id}', [
    AvionesController::class,
    'update'
])->name('aviones.update');

//Usuario

//Ruta para regresar la vista del formulario de registro
Route::get('/registro', [
    AuthController::class,
    'registerForm'
])->name('registro');

//Ruta para registrar los usuarios
Route::post('/registro', [
    AuthController::class,
    'register'
])->name('registro.store');


//Ruta para regresar vista de inicio de sesion
Route::get('/acceso', [
    AuthController::class,
    'loginForm'
])->name('acceso');

//Ruta para iniciar sesion
Route::post('/acceso', [
    AuthController::class,
    'login'
])->name('acceso.store');

//Ruta para cerrar sesion
Route::post('/cerrar', [
    AuthController::class,
    'logout'
])->name('cerrar');

route::middleware(['auth', 'admin'])->group(function () {

    route::get('/admin-dashboard', [
        AuthController::class,
        'adminDashboard'
    ])->name('admin-dashboard');
});
