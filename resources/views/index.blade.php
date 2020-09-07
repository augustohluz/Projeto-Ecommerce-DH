@extends('layouts.app');

@section('content')

<div>
    <div id="carouselSite" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
            <li data-target="#carouselSite" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" width:100%; height: 500px !important;>
            <div class="carousel-item active">
                <img src="{{ asset("img/Banner-bike-2-2.jpg") }}" class="img-fluid d-block">
                <div class="carousel-caption">
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset("img/banner-patinete-1-2.jpg") }}" class="img-fluid d-block">
                <div class="carousel-caption">
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset("img/banner-monociclo-1-2.jpg") }}" class="img-fluid d-block">
                <div class="carousel-caption">
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset("img/banner-moto-2.jpg") }}" class="img-fluid d-block">
                <div class="carousel-caption">
                </div>
            </div>

        </div>
    </div>

    <div class="row-futuro">
        <div class="text-center mt-5">
            <h1 class="display-3 fonte-slogam">O futuro é elétrico!</h1>
            <h3 class="fonte-slogam">Veja abaixo nossos produtos e apaixone-se!</h3>
        </div>
    </div>

    <div>
        <div class="row w-75 mx-auto mt-5">

            <div class="col-sm">
                <div class="card mx-auto">
                    <img class="card-img-top" src="{{ asset("img/card-bicicleta-2.jpg") }}">
                    <div class="card-body text-center">
                        <h2 class="card-tittle ">Bicicletas</h2>
                        <a class="btn btn-outline-secondary" href="bicicletas" role="button">Ver modelos</a>

                    </div>
                </div>

            </div>

            <div class="col-sm">
                <div class="card mx-auto">
                    <img class="card-img-top" src="{{ asset("img/card-patinete-2.jpg") }}">
                    <div class="card-body text-center">
                        <h2 class="card-tittle">Patinetes</h2>
                        <a class="btn btn-outline-secondary" href="patinetes" role="button">Ver modelos</a>

                    </div>
                </div>

            </div>

            <div class="col-sm">
                <div class="card mx-auto">
                    <img class="card-img-top" src="{{ asset("img/card-monociclo-2.jpg") }}">
                    <div class="card-body text-center">
                        <h2 class="card-tittle">Monociclos</h2>
                        <a class="btn btn-outline-secondary" href="monociclos" role="button">Ver modelos</a>

                    </div>
                </div>

            </div>

            <div class="col-sm">
                <div class="card mx-auto">
                    <img class="card-img-top" src="{{ asset("img/card-scooter-3.jpg") }}">
                    <div class="card-body text-center">
                        <h2 class="card-tittle">Motos</h2>
                        <a class="btn btn-outline-secondary" href="motos" role="button">Ver modelos</a>

                    </div>
                </div>

            </div>


        </div>
    </div>

    <article class="fonte-site">
        <div>
            <h2>Veículos elétricos são o futuro da mobilidade urbana</h2>
            <p class="text-muted">Venha com a gente saber mais sobre esse futuro!</p>
            <a href="#" rel="noopener noreferrer" title="">Ver todos os modelos</a>
        </div>
        <div>
            <img src="{{ asset("img/view-cidade-4.jpg") }}" alt="Imagem 02">
        </div>
    </article>

    <article class="fonte-site">
        <div>
            <h2>Conheça nossas opções de mobilidade disponíveis para você e todas as suas necessidades!</h2>
            <p class="text-muted"></p>
            <a href="#" rel="noopener noreferrer" title=""></a>
        </div>
        <div>
            <img src="{{ asset("img/view-cidade-6.jpg") }}" alt="Imagem 02">
        </div>
    </article>

    <article class="fonte-site">
        <div>
            <h2>Fale conosco ;)</h2>
            <p>Entre em contato com a gente e tire suas dúvidas.</p>
            <a href="contato" rel="noopener noreferrer" title="">Entrar em contato</a>
        </div>
        <div>
            <img src="{{ asset("img/view-fale-conosco-2.jpg") }}" alt="Imagem 02">
        </div>
    </article>
</div>

@endsection