<?php

use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;

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

Route::get('/', [SiteController::class, 'home']);
Route::get('/buscar', [SiteController::class, 'buscar']);

Route::get('/noticias', [NoticiaController::class, 'index']);
Route::get('/noticias/visualizar', [NoticiaController::class, 'visualizar']);
Route::get('/noticias/categoria', [SiteController::class, 'categoria']);

Route::get('/login', [LoginController::class, 'login']);





Route::prefix('/admin')->group(function () {

    Route::get('/', [AdminController::class, 'home'])
        ->name('admin.home');

    Route::get('/usuarios', [UsuariosController::class, 'index'])
        ->name('admin.usuarios.index');

    Route::get('/usuarios/cadastrar', [UsuariosController::class, 'create'])
        ->name('admin.usuarios.cadastrar');

    Route::post('/usuarios/cadastrar', [UsuariosController::class, 'store'])
        ->name('admin.usuarios.cadastrar');

    Route::get('/usuarios/editar/{id}', [UsuariosController::class, 'edit'])
        ->name('admin.usuarios.editar');

    Route::put('/usuarios/editar/{id}', [UsuariosController::class, 'update'])
        ->name('admin.usuarios.editar');

    Route::delete('/usuarios/deletar/{id}', [UsuariosController::class, 'destroy'])
        ->name('admin.usuarios.deletar');
});
