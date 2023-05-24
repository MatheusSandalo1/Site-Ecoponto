@extends('layouts.admin')

@section('titulo', 'Ecoponto')

@section('conteudo')


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ecopontos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <!-- Botão na Esquerda -->
            <a href="{{ route('admin.ecoponto.cadastrar') }}" class="btn btn-primary">Cadastrar</a>
        </div>
    </div>

    @include('admin.includes.alerta')

    <div class="conteudo-admin">

        <div class="tabela-registros">
            <h4 class="py-3">Lista de Ecopontos</h4>
            <div class="table-responsive mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" width="50">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Rua</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Funcionamento</th>
                            <th scope="col">Telefone</th>
                            <th scope="col" width="100">Ação</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($ecoponto as $user)

                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->nome }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="d-flex">
                                <a
                                href="{{ route('admin.ecoponto.editar',['id'=> $user->id ]) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

<form action="{{ route('admin.ecoponto.deletar',['id'=> $user->id ]) }}" method="post">

@csrf
@method('delete')

<button type="submit" class="btn btn-danger btn-sm ms-1" onclick="return confirm('Deseja deletar o Registro?')">
    <i class="fas fa-trash"></i>
</button>

</form>



                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
                <div class="paginacao mt-5">

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>


            </div>

        </div>

    </div>


@endsection
