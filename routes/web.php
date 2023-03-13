<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    // Route::get('/user/profile', [HomeController::class])
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/productos', [HomeController::class, 'productosIndex']);
    Route::get('/productos/new', [HomeController::class, 'productoCreateView']) -> name('admin.create');
    Route::post('/productos/new', [HomeController::class, 'productoCreate']) -> name('admin.create');
    Route::get('/productos/{id}', [HomeController::class, 'productoEditar']);
    Route::post('/productos/{id}', [HomeController::class, 'guardarProducto']);
    Route::post('/productos/{id}/borrar', [HomeController::class, 'borrarProducto']);

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/clientes', [HomeController::class, 'clientesIndex']);
    Route::get('/clientes/{id}', [HomeController::class, 'clientecreate']);
    Route::get('/clientes/{id}', [HomeController::class, 'clienteEditar']);
    Route::post('/clientes/{id}', [HomeController::class, 'guardarCliente']);
    Route::post('/clientes/{id}/borrar', [HomeController::class, 'borrarCliente']);
});