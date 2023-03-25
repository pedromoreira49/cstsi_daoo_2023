<?php

use App\Http\Controllers\AgendamentosController;
use App\Http\Controllers\HelpersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/hello', function () {
    echo 'Hello world';
});

Route::get('/hellocontroller', [HomeController::class, 'index']);

Route::get('/produto', [ProdutoController::class, 'index']);

Route::get('/produto/{id}', [ProdutoController::class, 'show']);

Route::get('/helper', [HelpersController::class, 'index']);

Route::get('/helper/{id}', [HelpersController::class, 'show']);

Route::get('/agendamento', [AgendamentosController::class, 'index']);

Route::get('/agendamento/{id}', [AgendamentosController::class, 'show']);
