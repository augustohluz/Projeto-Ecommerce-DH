@extends('layouts.app');
@section('title')
    {{$produto->nome}}
@endsection
@section('content')

<span class="mt-1"><br /><br /><br /><br /></span>
<div class="detalhes-produto">
<div class="container-fluid">
    <div class="row d-flex justify-content-between">
        <div class="col-lg-6 mb-3">
            <div id="carouselDetalhes" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselDetalhes" data-slide-to="0" class="active"></li>
                    
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset("img/card-bicicleta-2.jpg") }}" alt="First slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselDetalhes" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselDetalhes" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-lg-6">
            <h1>{{$produto->nome}}</h1>
            <small>código</small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dignissimos sint deserunt minus iure nobis fuga omnis, eligendi sed, ratione unde totam similique maiores porro vitae rerum iste minima eius.</p>
            <hr />
            <form action="">
                <div class="form-row">
                    <div class="col-12 col-md-6">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="Informe a quantidade">
                    </div>
                </div>
                <hr />
                <h3 id="precoPdt">R$ {{$produto->preco}}</h3>
                
                
                    <button href="/carrinho" class="btn btn-success">Adicionar ao carrinho</button>
                
                
            </form>
        </div>

    </div>

    <div class="row col-lg-12 align-content-center mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">
                        <h3>Ficha Técnica</h3>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Modelo</th>
                    <td>{{$produto->modelo}}</td>
                </tr>
                <tr>
                    <th scope="row">Velocidade</th>
                    <td>{{$produto->velocidade}}</td>
                </tr>
                <tr>
                    <th scope="row">Autonomia</th>
                    <td>45 km</td>
                </tr>
                <tr>
                    <th scope="row">Tempo de carregamento</th>
                    <td>5h até a carga máxima</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection