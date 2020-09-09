@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Alterar Produto</h1>

    <form method="POST" action="/produtos/update/{{$produtos->id}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        
        <div class="form-group">
            <label for="categoria">CATEGORIA</label>
            <input type="text" name="categoria" value="{{ $produtos->categoria}}" class="form-control {{$errors->has('categoria') ? ' is-invalid':''}}" id="categoria">
            <div class="invalid-feedback">{{ $errors->first('categoria') }}</div>
        </div>

        <div class="form-group">
            <label for="nome">NOME</label>
            <input type="text" name="nome" value="{{ $produtos->nome }}" class="form-control {{$errors->has('nome') ? ' is-invalid':''}}" id="nome">
            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
        </div>

        <div class="form-group">
            <label for="modelo">MODELO</label>
            <input type="text" name="modelo" value="{{ $produtos->modelo}}" class="form-control {{$errors->has('modelo') ? ' is-invalid':''}}" id="modelo">
            <div class="invalid-feedback">{{ $errors->first('modelo') }}</div>
        </div>

        <div class="form-group">
            <label for="velocidade">VELOCIDADE</label>
            <input type="text" name="velocidade" value="{{ $produtos->velocidade}}" class="form-control {{$errors->has('velocidade') ? ' is-invalid':''}}" id="velocidade">
            <div class="invalid-feedback">{{ $errors->first('velocidade') }}</div>
        </div>

        <div class="form-group">
            <label for="preco">PREÇO</label>
            <input type="text" name="preco" value="{{ $produtos->preco}}" class="form-control {{$errors->has('preco') ? ' is-invalid':''}}" id="preco">
            <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
        </div>

        <div class="form-group md-3">
            <button type="submit" class="form-control btn btn-primary">ALTERAR</button>
        </div>

        <div class="form-group">
            <a class="btn btn-secondary" href="/produtos" role="button">Voltar</a>
        </div>


    </form>
    @if(isset($success) && $success != "")
    <div class="alert alert-success text-center col-md-6">
        {{ $success }}
    </div>
    @endif
</div>
@endsection