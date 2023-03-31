<?php

use App\Http\Controllers\AgendamentosController;
use App\Http\Controllers\HelpersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/hellocontroller', [HomeController::class, 'index']);

Route::get('/helper', [HelpersController::class, 'index']);

Route::get('/helper/{id}', [HelpersController::class, 'show']);

Route::get('/agendamento', [AgendamentosController::class, 'index']);

Route::get('/agendamento/{id}', [AgendamentosController::class, 'show']);

#CRUD (Produtos)
##read
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos');
Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('show');

##create
Route::get('/produto', [ProdutoController::class, 'create'])->name('create');
Route::post('/produto', [ProdutoController::class, 'store']);

##update
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('edit');
Route::post('/produto/{id}/update', [ProdutoController::class, 'update'])->name('update');

##delete
Route::get('/produto/{id}/delete', [ProdutoController::class, 'delete'])->name('delete');
Route::post('/produto/{id}/delete', [ProdutoController::class, 'remove'])->name('remove');

#CRUD (Usuários)
##read
Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/user/{id}', [UsersController::class, 'show'])->name('showUser');

##create
Route::get('/user', [UsersController::class, 'createUser'])->name('createUser');
Route::post('/user', [UsersController::class, 'storeUser']);

##update
Route::get('/user/{id}/edit', [UsersController::class, 'editUser'])->name('editUser');
Route::post('/user{id}/update', [UsersController::class, 'updateUser'])->name('updateUser');

##delete
Route::get('/user/{id}/delete', [UsersController::class, 'deleteUser'])->name('deleteUser');
Route::post('/user/{id}/delete', [UsersController::class, 'removeUser'])->name('removeUser');
