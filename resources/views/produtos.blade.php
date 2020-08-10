@extends('layouts.app');

@section('content')

<div class="lista-produtos text-center">

    <h3>Produtos</h3>

    <table class="table table-hover display-flex">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">MODELO</th>
                <th scope="col">VELOCIDADE</th>
                <th scope="col">PREÇO</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $listaProdutos)
            <tr>
                <td>{{ $listaProdutos->id }}</td>
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
            <tr>
                @endforeach
        </tbody>
    </table>
</div>

@endsection