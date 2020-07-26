@extends('layouts.app');

@section('content')

<section class="formulario-contato-secao">
    <div id="content-wrap">
        <div class="container">
            <span class="mt-5"><br /></span>
            <h3>Entre em contato com a Mobilidade Urbana</h3>
            <form>
                <div class="form-group">
                    <label for="Name">Nome: </label>
                    <input type="text" class="form-control" id="Name" aria-describedby="nome" placeholder="Insira seu nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email: </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu email">
                </div>
                <div class="form-group">
                    <label for="descricao-contato">Descrição: </label>
                    <textarea class="form-control" name="descricaoContato" id="descricaoContato" cols="10" rows="10" placeholder="Digite aqui sua dúvida"></textarea>
                </div>
                <a class="btn btn-primary" href="#" role="button">Enviar</a>
            </form>
        </div>
    </div>


    <div id="mapaContato" class="container mt-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3656.047908788211!2d-46.6775367!3d-23.6026147!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1594237050504!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>

@endsection