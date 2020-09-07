@extends('layouts.app');

@section('content')

<!-- <span class="mt-5"><br /><br /></span> -->
<img src="{{ asset("img/banner_motos.jpg") }}" class="img-fluid d-block mx-auto">

<div class="x">
    <div class="row w-75 mx-auto mt-5">
        @foreach ($listaMoto as $produto)
        <div class="col-md-3 mb-4">
            <div class="card mx-auto border-1">
                <img class="card-img-top" src="{{ asset("img/card-scooter-3.jpg") }}">
                <div class="card-body">
                    <h4 class="card-tittle">{{ $produto->nome }}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Modelo: {{ $produto->modelo }}</h6>
                    <a href="detalhes/{{$produto->nome}}" class="card-link btn btn-outline-info"><b>Ver detalhes</b></a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection