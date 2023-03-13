<?php


use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Laravel\Fortify\Fortify;


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

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/productos', [HomeController::class, 'productosIndex']);
    Route::get('/productos/{id}', [HomeController::class, 'productoEditar']);
    Route::post('/productos/{id}', [HomeController::class, 'guardarProducto']);
    Route::post('/productos/{id}/borrar', [HomeController::class, 'borrarProducto']);


    Route::get('/ciudades', [HomeController::class, 'productosIndex']);
    Route::get('/ciudades/{id}', [HomeController::class, 'productoEditar']);
    Route::post('/ciudades/{id}', [HomeController::class, 'guardarProducto']);
    Route::post('/ciudades/{id}/borrar', [HomeController::class, 'borrarProducto']);


    Route::get('/barrios', [HomeController::class, 'productosIndex']);
    Route::get('/barrios/{id}', [HomeController::class, 'productoEditar']);
    Route::post('/barrios/{id}', [HomeController::class, 'guardarProducto']);
    Route::post('/barrios/{id}/borrar', [HomeController::class, 'borrarProducto']);
});
