<?php

use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Rutas de laboratorios
Route::get('/todos-laboratorios',[LaboratoryController::class,'todosLosLaboratorios'])->name('todos_los_laboratorios');
Route::get('/laboratorios/{nombre_laboratorio}',[LaboratoryController::class,'traerLaboratorio'])->name('laboratorio_x');
Route::get('/laboratorios_ordenados/{campo}/{orden}',[LaboratoryController::class,'traerLaboratoriosOrdenado']);
Route::get('/laboratorios-inicio',[LaboratoryController::class,'traerVistaPrincipal'])->name('dashboard_laboratorios');
Route::get('/laboratorio/eliminar/{id}',[LaboratoryController::class, 'eliminarLaboratorio'])->name('laboratorio_eliminar');
Route::get('/laboratorio/activar/{id}',[LaboratoryController::class, 'activarLaboratorio'])->name('laboratorio_activar'); 

Route::get('/laboratorio/crear',[LaboratoryController::class, 'mostrarFormularioCrear'])->name('laboratorio_crear');
Route::post('/laboratorio/guardar',[LaboratoryController::class, 'crearLaboratorio'])->name('laboratorio_guardar');

// Rutas de proveedores
Route::get('/proveedores-inicio',[ProviderController::class,'todosLosProveedores'])->name('proveedores_inicio'); //el inicio
Route::get('/proveedores/{id_a_buscar}',[ProviderController::class,'verProveedor'])->name('proveedor_ver');
Route::get('/proveedores/{id_a_buscar}/eliminar',[ProviderController::class,'eliminarProveedor'])->name('proveedor_eliminar');
//Route::get('/proveedores',[])->name('proveedores_inicio');
//Route::get('/proveedores-inicio',[])->name('proveedores_inicio');
//Route::get('/proveedores-inicio',[])->name('proveedores_inicio');

//Rutas de productos
//Route::get('nombre-endpoint',[Controlador::class,'metodo'])->name('alias_de_la_ruta');
