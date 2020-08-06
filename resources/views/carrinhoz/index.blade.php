@extends('layouts.app');

@section('content')

<div class="lista-produtos text-center">
    
    @if(!empty(Request::get('success')))
    <section class="row">
        <div class="col-12">
            <div class="message alert alert-success text-center">
                Registro excluído com sucesso
            </div>
        </div>
    </section>
    @endif

    <h3>Carrinho</h3>

    <table class="table table-hover display-flex">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">MODELO</th>
                <th scope="col">PREÇO</th>
                <th scope="col">STATUS</th>
                <th scope="col">EXCLUIR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listaCarrinho as $carrinhoTeste)
            <tr>
                <td>{{ $carrinhoTeste->id }}</td>
                <td>{{ $carrinhoTeste->nome }}</td>
                <td>{{ $carrinhoTeste->modelo }}</td>
                <td>{{ $carrinhoTeste->preco }}</td>
                <td>Em andamento</td>
                <td>
                    <a href="#" data-toggle="modal" data-target="#modal{{ $carrinhoTeste->id }}">
                        <i class="fas fa-trash"></i>
                    </a>
                    <div class="modal fade" id="modal{{ $carrinhoTeste->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Deseja excluir o cartão ? {{ $carrinhoTeste->nome }} ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Cartão: {{ $carrinhoTeste->nome }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <form action="/carrinho/remove {{ $carrinhoTeste->id }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button id="delete-contact" type="submit" class="btn btn-danger">Excluir</a></button>
                                    </form>
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