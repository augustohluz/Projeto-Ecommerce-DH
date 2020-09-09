@extends('layouts.app');

@section('content')

<div class="lista-produtos text-center">
    
    <div class="mb-4 text-left">
        <a href="/produto/add">
            <button class="btn btn-secondary">Cadastrar novo produto</button>
        </a>
    </div>

    <div class="mb-4">
        <form class="form-inline " action="{{ url('/produtos/search') }}" method="GET">
            <input class="form-control col-10" type="text" name="search" id="search" placeholder="O que você procura?">
            <button class="btn btn-secondary col-2" type="submit">Pesquisar</button>
        </form>
    </div>

    

    <table class="table table-hover display-flex">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Imagem</th>
                <th scope="col">Nome</th>
                <th scope="col">Modelo</th>
                <th scope="col">Velocidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Categoria</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $listaProdutos)
            <tr>
                <td>{{ $listaProdutos->id }}</td>
                <td>
                <img src="{{ asset('img/null.jpg') }}" alt="">
                </td>
                <td>{{ $listaProdutos->nome }}</td>
                <td>{{ $listaProdutos->modelo }}</td>
                <td>{{ $listaProdutos->velocidade }}</td>
                <td>{{ $listaProdutos->preco }}</td>
                <td>{{ $listaProdutos->categoria }}</td>
                <td>
                    <a href="/produtos/update/{{$listaProdutos->id}}">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="#" data-toggle="modal" data-target="#modal{{ $listaProdutos->id }}">
                        <i class="fas fa-trash"></i>
                    </a>
                    <div class="modal fade" id="modal{{ $listaProdutos->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><b>Você realmente deseja excluir o produto {{ $listaProdutos->nome }} ?</b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><b> Detalhes do produto:</b></p>
                                    <p><b>Produto:</b> {{ $listaProdutos->nome }}</p>
                                    <p><b>Produto:</b> {{ $listaProdutos->modelo }}</p>
                                    <p><b>Produto:</b> {{ $listaProdutos->categoria }}</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="/produtos/remove {{ $listaProdutos->id }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button id="delete-contact" type="submit" class="btn btn-danger">Excluir</a></button>
                                    </form>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection