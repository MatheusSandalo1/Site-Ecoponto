@extends('layouts.admin')

@section('titulo', 'Usuários')

@section('conteudo')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuários</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <!-- Botão na Esquerda -->
            <a href="#" class="btn btn-primary">Cadastrar</a>
        </div>
    </div>

    <div class="conteudo-admin">

        <div class="tabela-registros">
            <h4 class="py-3">Lista de Usuários</h4>
            <div class="table-responsive mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" width="50">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col" width="100">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Edson Rodrigues</td>
                            <td>edson@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>

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
