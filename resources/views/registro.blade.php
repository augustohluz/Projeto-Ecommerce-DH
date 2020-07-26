@extends('layouts.app');

@section('content')

<div id="content-wrap">
    <div class="container mt-5">
        <span class="mt-5"><br /></span>
        <h3>Formulário de cadastro no Mobilidade Urbana</h3>
        <form>
            <div class="form-group">
                <label for="Name">Nome: </label>
                <input type="text" class="form-control" id="Name" aria-describedby="emailHelp" placeholder="Insira seu nome">
            </div>
            <div class="form-group">
                <label for="Surname">Sobrenome: </label>
                <input type="text" class="form-control" id="Surname" aria-describedby="emailHelp" placeholder="Insira seu(s) sobrenome(s)">
            </div>
            <div class="form-group">
                <label for="Birthdate">Data de nascimento: </label>
                <input type="date" class="form-control" id="Birthdate" aria-describedby="emailHelp" placeholder="1/1/2020">
                <small id="emailHelp" class="form-text text-muted">Insira sua data de nascimento.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email: </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha: </label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Li e concordo com os <a href="termos-condicoes.php" class="text-info">Termos de Serviço.</a></label>
            </div>
            <button type="submit" class="btn btn-primary">Criar Usuario</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </form>
    </div>
</div>

@endsection