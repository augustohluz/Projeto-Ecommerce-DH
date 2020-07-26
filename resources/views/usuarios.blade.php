@extends('layouts.app');

@section('content')

<div class="lista-usuarios text-center">
    
    <h3>Usuários</h3>
    
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">EMAIL</th>
                <th scope="col">NOME</th>
                <th scope="col">STATUS</th>
                <th scope="col">EDITAR</th>
                <th scope="col">EXCLUIR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>augusto@gmail.com</td>
                <td>Augusto</td>
                <td>Ativo</td>
                <td><i class="far fa-edit"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>eduardo@gmail.com</td>
                <td>Eduardo</td>
                <td>Ativo</td>
                <td><i class="far fa-edit"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>luigi@gmail.com</td>
                <td>Luigi</td>
                <td>Ativo</td>
                <td><i class="far fa-edit"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection