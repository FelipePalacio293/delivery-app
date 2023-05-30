<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\WeatherController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/login', [LoginController::class, 'login']);

Route::get('/mapa', [MapaController::class, 'show']);

Route::get('/pedidos', function () {
    return view('pedidos.pedidos');
});

Route::get('/rutas/{id}', [MapaController::class, 'showRoute']);

Route::post('/logs', [LogController::class, 'store']);

Route::get('/logs', function () {
    return view('logreader.index');
});

Route::get('/clima', [WeatherController::class, 'checkRain']);
