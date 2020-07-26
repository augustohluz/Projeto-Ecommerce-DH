@extends('layouts.app');

@section('content')

<span class="mt-5"><br /><br /><br /><br /></span>

<div class="container-fluid">
    <div class="row d-flex justify-content-between">
        <div class="col-lg-6 mb-3">
            <div id="carouselDetalhes" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselDetalhes" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselDetalhes" data-slide-to="1"></li>
                    <li data-target="#carouselDetalhes" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset("img/card-bicicleta-2.jpg") }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset("img/card-patinete-2.jpg") }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset("img/card-monociclo-2.jpg") }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselDetalhes" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselDetalhes" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-lg-6">
            <h2>Produto</h2>
            <small>código</small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dignissimos sint deserunt minus iure nobis fuga omnis, eligendi sed, ratione unde totam similique maiores porro vitae rerum iste minima eius.</p>
            <hr />
            <form action="">
                <div class="form-row">
                    <div class="col-12 col-md-6">
                        <label for="cor">Cores</label>
                        <select class="form-control" name="cor" id="cor">
                            <option selected disabled value="">Escolha uma Cor</option>
                            <option value="Azul">Azul</option>
                            <option value="Vermelho">Vermelho</option>
                            <option value="Preto">Preto</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="Informe a quantidade">
                    </div>
                </div>
                <hr />
                <p id="precoPdt">R$ 5.554,99</p>
                <button type="submit" class="btn btn-primary">Adicionar ao carrinho</button>
                <button type="submit" disabled class="btn btn-secondary" title="Em breve!">Comprar com 1 Clique</button>
            </form>
        </div>

    </div>

    <div class="row col-lg-12 align-content-center mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">
                        <h3>Ficha Técnica</h3>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Modelo</th>
                    <td>QWERTY XY</td>
                </tr>
                <tr>
                    <th scope="row">Velocidade máxima</th>
                    <td>25 km/h</td>
                </tr>
                <tr>
                    <th scope="row">Potência do motor</th>
                    <td>280 Wh</td>
                </tr>
                <tr>
                    <th scope="row">Autonomia</th>
                    <td>45 km</td>
                </tr>
                <tr>
                    <th scope="row">Tempo de carregamento</th>
                    <td>5h até a carga máxima</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection