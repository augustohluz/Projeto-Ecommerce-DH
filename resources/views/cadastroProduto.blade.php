@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Cadastro de Produto</h1>

    <form method="POST" action="/produto/add" enctype="multipart/form-data">
        @csrf
        {{ method_field('POST') }}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{ old('nome') }}" class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" id="nome">
            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
        </div>

        <div class="form-group">
            <label for="modelo">modelo</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}" class="form-control{{$errors->has('modelo') ? ' is-invalid':''}}" id="modelo">
            <div class="invalid-feedback">{{ $errors->first('modelo') }}</div>
        </div>

        <div class="form-group">
            <label for="velocidade">Velocidade</label>
            <input type="text" name="velocidade" value="{{ old('velocidade') }}" class="form-control{{$errors->has('velocidade') ? ' is-invalid':''}}" id="velocidade">
            <div class="invalid-feedback">{{ $errors->first('velocidade') }}</div>
        </div>
        
        <div class="form-group">
            <label for="preco">Preco</label>
            <input type="text" name="preco" value="{{ old('preco') }}" class="form-control{{$errors->has('preco') ? ' is-invalid':''}}" id="preco">
            <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
        </div>
        
        <div class="form-group">
            <label for="categoria">categoria</label>
            <input type="text" name="categoria" value="{{ old('categoria') }}" class="form-control{{$errors->has('categoria') ? ' is-invalid':''}}" id="categoria">
            <div class="invalid-feedback">{{ $errors->first('categoria') }}</div>
        </div>

        <!--<div class="form-group col-md-6 col-sm-12">
            <label for="image">Imagem</label>
            <input type="file" name="image" value="{{ old('image') }}" class="form-control{{$errors->has('image') ? ' is-invalid':''}}" id="image">
            <div class="invalid-feedback">{{ $errors->first('image') }}</div>
        </div>-->

        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary">Cadastrar</button>
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