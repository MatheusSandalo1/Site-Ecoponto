<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\EcopontoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstrucoesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TipoController;
use App\Models\EcopontoModel;
use App\Models\TipoModel;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');

Route::get('/login', [LoginController::class, 'login'])
    ->name('login');

Route::post('/login', [LoginController::class, 'postLogin'])->name('post.login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('/admin')->middleware('auth')->group(function () {

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

    //instrucoes

    Route::get('/instrucoes', [InstrucoesController::class, 'index'])
        ->name('admin.instrucoes.index');

    Route::get('/instrucoes/cadastrar', [InstrucoesController::class, 'create'])
        ->name('admin.instrucoes.cadastrar');

    Route::post('/instrucoes/cadastrar', [InstrucoesController::class, 'store'])
        ->name('admin.instrucoes.cadastrar');

    Route::get('/instrucoes/editar/{id}', [InstrucoesController::class, 'edit'])
        ->name('admin.instrucoes.editar');

    Route::put('/instrucoes/editar/{id}', [InstrucoesController::class, 'update'])
        ->name('admin.instrucoes.editar');

    Route::delete('/instrucoes/deletar/{id}', [InstrucoesController::class, 'destroy'])
        ->name('admin.instrucoes.deletar');

    //tipo
    Route::get('/tipo', [TipoController::class, 'index'])
        ->name('admin.tipo.index');

    Route::get('/tipo/cadastrar', [TipoController::class, 'create'])
        ->name('admin.tipo.cadastrar');

    Route::post('/tipo/cadastrar', [TipoController::class, 'store'])
        ->name('admin.tipo.cadastrar');

    Route::get('/tipo/editar/{id}', [TipoController::class, 'edit'])
        ->name('admin.tipo.editar');

    Route::put('/tipo/editar/{id}', [TipoController::class, 'update'])
        ->name('admin.tipo.editar');

    Route::delete('/tipo/deletar/{id}', [TipoController::class, 'destroy'])
        ->name('admin.tipo.deletar');

    //Ecopontos

    Route::get('/ecoponto', [EcopontoController::class, 'index'])
        ->name('admin.ecoponto.index');

    Route::get('/ecoponto/cadastrar', [EcopontoController::class, 'create'])
        ->name('admin.ecoponto.cadastrar');

    Route::post('/ecoponto/cadastrar', [EcopontoController::class, 'store'])
        ->name('admin.ecoponto.cadastrar');

    Route::get('/ecoponto/editar/{id}', [EcopontoController::class, 'edit'])
        ->name('admin.ecoponto.editar');

    Route::put('/ecoponto/editar/{id}', [EcopontoController::class, 'update'])
        ->name('admin.ecoponto.editar');

    Route::delete('/ecoponto/deletar/{id}', [EcopontoController::class, 'destroy'])
        ->name('admin.ecoponto.deletar');
});
