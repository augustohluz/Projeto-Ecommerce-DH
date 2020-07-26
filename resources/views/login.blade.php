@extends('layouts.app');

@section('content')

<div class="my-5 py5">
    <section class="mt-5 formulario-contato-secao">
        <div class="formulario-contato text-center">
            <h3>ENTRAR COM EMAIL E SENHA</h3>
            <form class="form-contato">
                <input class="field-contato" name="Email" placeholder="Digite seu email">
                <input class="field-contato" name="Senha" placeholder="Digite sua senha">
                <a class="btn btn-outline-secondary" href="#" role="button">Entrar</a>
            </form>
        </div>
    </section>
</div>

@endsection