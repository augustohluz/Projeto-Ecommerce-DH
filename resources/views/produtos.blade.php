@extends('layouts.app');

@section('content')

<div class="lista-produtos text-center">

    <h3>Produtos</h3>

    <table class="table table-hover display-flex">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TIPO</th>
                <th scope="col">MODELO</th>
                <th scope="col">COR</th>
                <th scope="col">PREÇO</th>
                <th scope="col">QUANTIDADE</th>
                <th scope="col">VELOCIDADE MÁXIMA</th>
                <th scope="col">POTENCIA DO MOTOR</th>
                <th scope="col">AUTONOMIA</th>
                <th scope="col">TEMPO DE CARREGAMENTO</th>
                <th scope="col">STATUS</th>
                <th scope="col">EDITAR</th>
                <th scope="col">EXCLUIR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Bicicleta</td>
                <td>Trek</td>
                <td>Preto</td>
                <td>5500</td>
                <td>7</td>
                <td>60 Km/h</td>
                <td>350 Wh</td>
                <td>60 km</td>
                <td>6h até a carga máxima</td>
                <td>Disponível</td>
                <td><i class="far fa-edit"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Patinete</td>
                <td>Xiaomi</td>
                <td>Vermelho</td>
                <td>4900</td>
                <td>15</td>
                <td>35 Km/h</td>
                <td>250 Wh</td>
                <td>40 km</td>
                <td>4h até a carga máxima</td>
                <td>Disponível</td>
                <td><i class="far fa-edit"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>

            </tr>
        </tbody>
    </table>
</div>

@endsection