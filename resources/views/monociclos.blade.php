@extends('layouts.app');

@section('content')

<!-- <span class="mt-5"><br /><br /></span> -->
<img src="{{ asset("img/banner_monociclos.jpg") }}" class="img-fluid d-block mx-auto">

<div class="x">
    <div class="row w-75 mx-auto mt-5">
        @foreach ($listaMonociclo as $produtoX)
        <div class="col-md-3">
            <div class="card mx-auto border-0">
                <img class="card-img-top" src="{{ asset("img/card-bicicleta-2.jpg") }}">
                <div class="card-body">
                    <h4 class="card-tittle">{{ $produtoX->nome }}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Conforto e performance para suas atividades</h6>
                    <a href="detalhes" class="card-link">Comprar</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection