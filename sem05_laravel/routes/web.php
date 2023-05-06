<?php

use App\Http\Controllers\AgendamentosController;
use App\Http\Controllers\HelpersController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

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

#CRUD (Helpers)
##read
Route::get('/helpers', [HelpersController::class, 'index'])->name('helpers');
Route::get('/helper/{id}', [HelpersController::class, 'show'])->name('showHelper');

##create
Route::get('/helper', [HelpersController::class, 'createHelper'])->name('createHelper');
Route::post('/helper', [HelpersController::class, 'storeHelper']);

##update
Route::get('/helper/{id}/edit', [HelpersController::class, 'editHelper'])->name('editHelper');
Route::post('/helper/{id}/update', [HelpersController::class, 'updateHelper'])->name('updateHelper');

##delete
Route::get('/helper/{id}/delete', [HelpersController::class, 'deleteHelper'])->name('deleteHelper');
Route::post('/helper/{id}/delete', [HelpersController::class, 'removeHelper'])->name('removeHelper');

#CRUD (Agendamentos)
##read
Route::get('/agendamentos', [AgendamentosController::class, 'index'])->name('agendamentos');
Route::get('/agendamento/{id}', [AgendamentosController::class, 'show'])->name('showAgendamento');

##create
Route::get('/agendamento', [AgendamentosController::class, 'createAgendamento'])->name('createAgendamento');
Route::post('/agendamento', [AgendamentosController::class, 'storeAgendamento']);

##update
Route::get('/agendamento/{id}/edit', [AgendamentosController::class, 'editAgendamento'])->name('editAgendamento');
Route::post('/agendamento/{id}/update', [AgendamentosController::class, 'updateAgendamento'])->name('updateAgendamento');

##delete
Route::get('/agendamento/{id}/delete', [AgendamentosController::class, 'deleteAgendamento'])->name('deleteAgendamento');
Route::post('/agendamento/{id}/delete', [AgendamentosController::class, 'removeAgendamento'])->name('removeAgendamento');