<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>Cardápio - Seja bem vindo!</title>
</head>
<body>
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg pl-0 pr-0">
                <a href="#" class="navbar-brand"></a>
                <img class="img.logo" src="{{ asset('assets/img/logo.png') }}" width="140px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar navbar-nav ml-auto mr-auto">
                        <li class="nav-item">
                            <a href="#reservas" class="nav-link"><b>Reservas</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="#serviços" class="nav-link"><b>Serviços</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="#cardápio" class="nav-link"><b>Cardápio</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="#depoimentos" class="nav-link"><b>Depoimentos</b></a>
                        </li>
                    </ul>

                    <a class="btn btn-white btn-icon">
                        Minha bandeja <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                    </a>
                </div>
            </nav>
        </div>
    </section>

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="d-flex text-banner">
                        <h1><b>Escolha sua comida <b class="color-primary">favorita!</b></b></h1>
                        <p>Aproveite nosso cardápio. Escolha o que desejar e receba no conforto do seu lar de forma rápida e segura!</p>

                        <div>
                            <a class="btn btn-yellow mt-4 mr-3">
                                Ver cardápio
                            </a>
                            <a href="" class="btn btn-white btn-icon-left mt-4 contact">
                                <span class="icon-left">
                                    <i class="fa fa-phone"></i>
                                </span>
                                (21) 99746-7377
                            </a>
                        </div>
                    </div>

                    <a class="btn btn-sm btn-white btn-social mt-4 mr-3">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a class="btn btn-sm btn-white btn-social mt-4 mr-3">
                        <i class="fab fa-facebook"></i>
                    </a>

                    <a class="btn btn-sm btn-white btn-social mt-4">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>

                <div class="col-6">
                    <div class="card-banner"></div>
                    <div class="d-flex img-banner">
                        <img src="{{ asset('assets/img/burguer.png') }}"">
                    </div>
                    <div class="card card-case">
                       <b> "Entrega rápida e lanches deliciosos!
                           <br>A comida chegou quente e<br>
                           muito saborosa!"</b>
                        <span class="card-case-name">
                            <b>Joaquim Domingos</b>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="background-services"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <span class="hint-title"><b>Serviços</b></span>
                    <h1 class="title">
                        <b>Qual é o nosso diferencial?</b>
                    </h1>
                </div>
                <div class="col-4 mb-5">
                    <div class="card-icon text-center">
                        <img src="{{ asset('assets/img/icone-pedido.svg') }}" width="150">
                        <div class="card-text text-center mt-3">
                            <p><b>Fácil de pedir</b></p>
                            <span>
                                Você só precisa de alguns cliques para pedir sua comida!
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-5">
                    <div class="card-icon text-center">
                        <img src="{{ asset('assets/img/icone-delivery.svg') }}" width="250">
                        <div class="card-text text-center mt-3">
                            <p><b>Entrega rápida</b></p>
                            <span>
                                Nossa entrega é sempre pontual, rápida e segura!
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-5">
                    <div class="card-icon text-center">
                        <img src="{{ asset('assets/img/icone-qualidade.svg') }}" width="250">
                        <div class="card-text text-center mt-3">
                            <p><b>Melhor qualidade</b></p>
                            <span>
                                Não só a rapidez na entrega, a qualidade também é o nosso forte!
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu">

    </section>

    <section class="testimonials">

    </section>

    <section class="reserve">

    </section>

    <footer>

    </footer>

    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.12.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr-3.5.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
</body>
</html>
