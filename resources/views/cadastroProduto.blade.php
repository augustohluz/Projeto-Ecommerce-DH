@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1>Cadastro de Produto</h1>

    <form method="POST" action="/produto/add" enctype="multipart/form-data">
        @csrf
        {{ method_field('POST') }}
        <div class="form-group col-md-6 col-sm-12">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{ old('nome') }}" class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" id="nome">
            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="modelo">modelo</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}" class="form-control{{$errors->has('modelo') ? ' is-invalid':''}}" id="modelo">
            <div class="invalid-feedback">{{ $errors->first('modelo') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="velocidade">Velocidade</label>
            <input type="text" name="velocidade" value="{{ old('velocidade') }}" class="form-control{{$errors->has('velocidade') ? ' is-invalid':''}}" id="velocidade">
            <div class="invalid-feedback">{{ $errors->first('velocidade') }}</div>
        </div>
        
        <div class="form-group col-md-6 col-sm-12">
            <label for="preco">Preco</label>
            <input type="text" name="preco" value="{{ old('preco') }}" class="form-control{{$errors->has('preco') ? ' is-invalid':''}}" id="preco">
            <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
        </div>
        
        <div class="form-group col-md-6 col-sm-12">
            <label for="categoria">categoria</label>
            <input type="text" name="categoria" value="{{ old('categoria') }}" class="form-control{{$errors->has('categoria') ? ' is-invalid':''}}" id="categoria">
            <div class="invalid-feedback">{{ $errors->first('categoria') }}</div>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Cadastrar</button>
        </div>
    </form>
    @if(isset($success) && $success != "")
    <div class="alert alert-success text-center col-md-6">
        {{ $success }}
    </div>
    @endif
</div>
@endsection