<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\Dashboard2Controller;
use App\Http\Controllers\PresuController;


use App\Http\Controllers\VistaPrincipalController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\InstalacionesController;

use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('principal'); 
})->name('principal');


Route::post('/', [AuthController::class, 'login'])->name('principal.submit');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard2', [Dashboard2Controller::class, 'index'])->name('dashboard2');
    Route::get('/cliente', [ClienteController::class, 'index']);
    Route::get('/factura', [FacturaController::class, 'index']);
    Route::get('/informes', [InformesController::class, 'index']);
    Route::post('/presu', [PresuController::class, 'store'])->name('presu.store');

    Route::get('/presupuesto', [PresupuestoController::class, 'index'])->name('presupuestos.index');

//ruta para crear presupuesto
// Route::post('/presupuesto/create', [PresupuestoController::class, 'create'])->name('presupuestos.create');
//ruta  para mostrar detalle presupuesto
Route::post('/presupuesto/create', [PresupuestoController::class, 'create'])->name('presupuestos.create');
Route::get('/presupuesto/detalles/{idPresu}', [PresupuestoController::class, 'detalles'])->name('presupuestos.detalles');
Route::get('/presupuesto/edit/{idPresu}', [PresupuestoController::class, 'edit'])->name('presupuestos.edit');
Route::post('/presupuesto/update/{idPresu}', [PresupuestoController::class, 'update'])->name('presupuestos.update');
Route::post('/presupuesto/delete/{idPresu}', [PresupuestoController::class, 'delete'])->name('presupuestos.delete');

//cliente
// // Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');

Route::get('/cliente/search', [ClienteController::class, 'search'])->name('cliente.search');

//ruta agregar nuevo cliente
Route::post("/registrar-cliente", [ClienteController::class, "create"])->name("crud.create");
//ruta modificar cliente
Route::post("/modificar-cliente", [ClienteController::class, "update"])->name("crud.update");
//ruta eliminar cliente 
Route::get("/eliminar-cliente-{id}", [ClienteController::class, "delete"])->name("crud.delete");




// Ruta para la vista de informes
Route::get('/informes', [InformesController::class, 'index'])->name('informes.index');
Route::post('/informes/create', [InformesController::class, 'create'])->name('informes.create');
Route::post('/informes/update/{id}', [InformesController::class, 'update'])->name('informes.update');
Route::post('/informes/delete/{id}', [InformesController::class, 'destroy'])->name('informes.destroy');
// Ruta para la vista de factura
Route::get('/factura', [FacturaController::class, 'index'])->name('factura.index');
Route::post('/factura/create', [FacturaController::class, 'create'])->name('factura.create');
Route::post('/factura/update/{id}', [FacturaController::class, 'update'])->name('factura.update');
Route::post('/factura/delete/{id}', [FacturaController::class, 'destroy'])->name('factura.destroy');
// Presu
Route::get('/presu', [PresuController::class, 'index'])->name('presu.index');
Route::post('/presu', [PresuController::class, 'store'])->name('presu.store');
Route::put('/presu/{id}', [PresuController::class, 'update'])->name('presu.update');
Route::delete('/presu/{id}', [PresuController::class, 'destroy'])->name('presu.destroy');

});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard2', [Dashboard2Controller::class, 'index'])->name('dashboard2');
    Route::get('/api/ingresos-del-mes', [Dashboard2Controller::class, 'getIngresosDelMes'])->name('api.ingresos_del_mes');
});

Route::get('/api/total-clientes', [ClienteController::class, 'getTotalClientes'])->name('api.total_clientes');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//pdf
Route::get('/informes/pdf/{id}', [InformesController::class, 'generatePDF'])->name('informes.pdf');

//vista cliente
Route::get('/vistaprincipal', [VistaPrincipalController::class, 'index'])->name('vistaprincipal');
Route::get('/servicios', [ServiciosController::class, 'index'])->name('services');
Route::get('/mantenimiento', [MantenimientoController::class, 'index'])->name('mantenimiento');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('about');
Route::get('/instalaciones', [InstalacionesController::class, 'index'])->name('instalaciones');


//Formulario
Route::get('/instalaciones', [ServicioController::class, 'create'])->name('instalaciones');
Route::post('/instalaciones', [ServicioController::class, 'store'])->name('instalaciones.store');

//Productos
Route::get('/instalaciones', [ProductoController::class, 'index'])->name('instalaciones');
Route::post('/instalaciones/filter', [ProductoController::class, 'filter'])->name('instalaciones.filter');
Route::get('/mantenimiento', [MantenimientoController::class, 'index'])->name('mantenimiento');

Route::get('/instalaciones/producto/{id}', [InstalacionesController::class, 'showProducto'])->name('instalaciones.producto.show');
// Ruta para la vista de instalaciones
Route::get('/instalaciones', [App\Http\Controllers\InstalacionesController::class, 'index'])->name('instalaciones');


