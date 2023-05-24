<?php

use App\Http\Controllers\Api\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/usuarios', [UsuarioController::class, 'getUsuarios']);

Route::get('/usuarios/cadastrar', [UsuarioController::class, 'cadastrarUsuario']);
