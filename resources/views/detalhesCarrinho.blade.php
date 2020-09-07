@extends('layouts.app');

@section('content')

    <span class="mt-5"></span>

    <form method="POST" action="/carrinho/add" enctype="multipart/form-data">
        @csrf
        {{ method_field('POST') }}
        <div class="form-group col-md-6 col-sm-12">
            <label for="nome">nome</label>
            <input type="text" name="nome" value="{{ old('nome') }}" class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" id="nome">
            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="modelo">modelo</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}" class="form-control{{$errors->has('modelo') ? ' is-invalid':''}}" id="modelo">
            <div class="invalid-feedback">{{ $errors->first('modelo') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="content">precojc</label>
            <input type="text" name="preco" value="{{ old('preco') }}" class="form-control{{$errors->has('preco') ? ' is-invalid':''}}" id="preco">
            <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Adicionar ao carrinho</button>
        </div>
    </form>
    @if(isset($success) && $success != "")
    <div class="alert alert-success text-center col-md-6">
        {{ $success }}
    </div>
    @endif


@endsection