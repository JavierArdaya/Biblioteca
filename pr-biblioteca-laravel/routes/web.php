<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\BusquedaController;
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

Route::get('/', function () {
    return view('welcome');
});
//Register
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);
//Login
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index']);

//Route::get('/categoria', function () {
//  return view('categoria.index');
//});
Route::get('/categoria', [CategoriaController::class, 'index']);
Route::get('/categoria/create', [CategoriaController::class, 'create']);
Route::put('/categoria/{{IdCategoria}}/edit', [CategoriaController::class, 'edit']);
Route::post('/categoria', [CategoriaController::class, 'store']);
Route::get('/libros',[BusquedaController::class, 'obtenerLibros']);
Route::get('/getLibros',[BusquedaController::class, 'getLibros']);
//Route::resourse('/categoria', [CategoriaController::class, 'store']);
Route::get('/administrador', function () {
    return view('administrador.index');
});


