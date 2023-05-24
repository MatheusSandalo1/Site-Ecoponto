@extends('layouts.admin')

@section('titulo', 'Ecoponto')

@section('conteudo')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar Ecoponto</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <!-- Botão na Esquerda -->

        </div>
    </div>

    <div class="formulario">
        <form class="row g-3" method="post"
        action="{{ route('admin.ecoponto.editar',['id'=> $usuario->id]) }}">

            @method('put')

            @include('admin.ecoponto._formulario')
        </form>
    </div>



@endsection

