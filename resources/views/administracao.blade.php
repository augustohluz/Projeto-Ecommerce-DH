@extends('layouts.app');

@section('content')


<div>
    <h1 class="mt-5 text-center">
        Administração do site Mobilidade Urbana
    </h1>

    <div class="row w-75 mx-auto mt-3">
        <div class="col-sm">
            <div class="card mx-auto">
                <div class="card-body text-center">
                    <h2 class="card-tittle ">Usuários</h2>
                    <a class="btn btn-outline-secondary" href="usuarios" role="button">Acessar</a>

                </div>
            </div>

        </div>

        <div class="col-sm">
            <div class="card mx-auto">
                <div class="card-body text-center">
                    <h2 class="card-tittle">Produtos</h2>
                    <a class="btn btn-outline-secondary" href="produtos" role="button">Acessar</a>

                </div>
            </div>

        </div>

        <div class="col-sm">
            <div class="card mx-auto">
                <div class="card-body text-center">
                    <h2 class="card-tittle">Contato</h2>
                    <a class="btn btn-outline-secondary disabled" href="x" role="button">Acessar</a>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection