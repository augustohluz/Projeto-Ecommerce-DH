@extends('layouts.app');

@section('content')

<!-- <span class="mt-5"><br /><br /></span> -->
<img src="{{ asset("img/banner_monociclos.jpg") }}" class="img-fluid d-block mx-auto">
<div class="x">
    <div class="row w-75 mx-auto mt-5">
        <div class="col-sm">
            <div class="card mx-auto border-0">
                <img class="card-img-top" src="{{ asset("img/card-bicicleta-2.jpg") }}">
                <div class="card-body">
                    <h4 class="card-tittle">Monociclo Elétrico 1</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Conforto e performance para suas atividades</h6>
                    <a href="detalhes" class="card-link">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card mx-auto border-0">
                <img class="card-img-top" src="{{ asset("img/card-patinete-2.jpg") }}">
                <div class="card-body">
                    <h4 class="card-tittle">Monociclo Elétrico 2</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Mobilidade e economia para qualquer hora</h6>
                    <a href="detalhes" class="card-link">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card mx-auto border-0">
                <img class="card-img-top" src="{{ asset("img/card-monociclo-2.jpg") }}">
                <div class="card-body">
                    <h4 class="card-tittle">Monociclo Elétrico 3</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Praticidade para o dia a dia</h6>
                    <a href="detalhes" class="card-link">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card mx-auto border-0">
                <img class="card-img-top" src="{{ asset("img/card-scooter-3.jpg") }}">
                <div class="card-body">
                    <h4 class="card-tittle">Monociclo Elétrico 4</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Elegância e economia na sua rotina</h6>
                    <a href="detalhes" class="card-link">Comprar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row w-75 mx-auto mt-5">
        <div class="col-sm">
            <div class="card mx-auto border-0">
                <img class="card-img-top" src="{{ asset("img/card-bicicleta-2.jpg") }}">
                <div class="card-body">
                    <h4 class="card-tittle">Monociclo Elétrico 5</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Conforto e performance para suas atividades</h6>
                    <a href="detalhes" class="card-link">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card mx-auto border-0">
                <img class="card-img-top" src="{{ asset("img/card-patinete-2.jpg") }}">
                <div class="card-body">
                    <h4 class="card-tittle">Monociclo Elétrico 6</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Mobilidade e economia para qualquer hora</h6>
                    <a href="detalhes" class="card-link">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card mx-auto border-0">
                <img class="card-img-top" src="{{ asset("img/card-monociclo-2.jpg") }}">
                <div class="card-body">
                    <h4 class="card-tittle">Monociclo Elétrico 7</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Praticidade para o dia a dia</h6>
                    <a href="detalhes" class="card-link">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card mx-auto border-0">
                <img class="card-img-top" src="{{ asset("img/card-scooter-3.jpg") }}">
                <div class="card-body">
                    <h4 class="card-tittle">Monociclo Elétrico 8</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Elegância e economia na sua rotina</h6>
                    <a href="detalhes" class="card-link">Comprar</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection