@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <div class="">
            <div class="card border-success">

                <div class="card-body text-success">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Olá {{ Auth::user()->name }}, seja bem vindo a sua conta.
                </div>
            </div>
            <a class="mt-2 btn btn-outline-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Desconectar') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>


<div>
    <div class="row w-75 mx-auto mt-5">

        <div class="col-sm">
            <div class="card mx-auto">
                <div class="card-body text-center">
                    <h2 class="card-tittle ">Meu cadastro</h2>
                    <a class="btn btn-outline-secondary disabled" href="usuarios" role="button">Visualizar</a>

                </div>
            </div>

        </div>

        <div class="col-sm">
            <div class="card mx-auto">
                <div class="card-body text-center">
                    <h2 class="card-tittle">Histórico de compras</h2>
                    <a class="btn btn-outline-secondary disabled" href="produtos" role="button">Visualizar</a>

                </div>
            </div>

        </div>

        <div class="col-sm">
            <div class="card mx-auto">
                <div class="card-body text-center">
                    <h2 class="card-tittle">Notificações</h2>
                    <a class="btn btn-outline-secondary disabled" href="x" role="button">Vizualizar</a>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection