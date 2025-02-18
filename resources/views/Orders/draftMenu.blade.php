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
        <div class="background-menu"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <span class="hint-title"><b>Cardápio</b></span>
                    <h1 class="title">
                        <b>Conheça o nosso cardápio</b>
                    </h1>
                </div>

                <div class="col-12 container-menu">
                    <a class="btn btn-white btn-sm mr-3 active">
                        <i class="fas fa-hamburger"></i>&nbsp; Burgers
                    </a>

                    <a class="btn btn-white btn-sm mr-3">
                        <i class="fas fa-hamburger"></i>&nbsp; Artesanais
                    </a>

                    <a class="btn btn-white btn-sm mr-3">
                        <i class="fas fa-wine-bottle"></i>&nbsp; Bebidas
                    </a>

                    <a class="btn btn-white btn-sm mr-3">
                        <i class="fas fa-cookie-bite"></i>&nbsp; Sobremesas
                    </a>
                </div>

                <div class="col-12">
                    <div class="row" id="menuItems">
                        @foreach($products as $product)
                            <div class="col-3 mt-4">
                                <form class="product-form" data-product-id="{{ $product->id }}" method="post">
                                    @csrf
                                    <div class="card card-item">
                                        <div class="product-img">
                                            <img src="{{ asset('assets/img/cardapio/burguers/burger-au-poivre-kit-4-pack.3ca0e39b02db753304cd185638dad518.jpg') }}" />
                                        </div>
                                        <p class="product-title text-center mt-4">
                                            <b>{{ $product->name }}</b>
                                        </p>
                                        <p class="product-price text-center">
                                            <b>R$ {{ $product->price }}</b>
                                        </p>
                                        <input type="hidden" name="productId" value="{{ $product->id }}">
                                        <input type="number" class="form-control" name="ammount" style="width: 90px" value="1" hidden="">
                                        <div class="add-tray">
                                            <span class="btn-less"><i class="fas fa-minus"></i></span>
                                            <span class="add-number-items">0</span>
                                            <span class="btn-plus"><i class="fas fa-plus"></i></span>
                                            <button type="submit" class="btn btn-add"><i class="fas fa-shopping-bag"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-12 text-center">
                   <a class="btn btn-white btn-sm"><b>Ver mais</b></a>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">

    </section>

    <section class="reserve">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-secondary">
                        <div class="row">
                            <div class="col-7">
                               <span class="hint-title"><b>Reservas</b></span>
                                <h1 class="title">
                                <b>Quer reservar um horário?</b>
                                </h1>
                                <p class="pr-5">
                                    Mande uma mensagem clicando no botão abaixo!
                                    <br>
                                    Reserve sua data e horário de forma simples e rápida.
                                </p>

                                <a class="btn btn-yellow mt-4">
                                    <b>Fazer reserva</b>
                                </a>
                            </div>

                            <div class="col-5">
                                <div class="card-reserve"></div>
                                <div class="d-flex img-banner">
                                    <img src="{{ asset('assets/img/icone-reserva.svg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-3 container-logo-footer">
                   <img class="logo-footer" src="{{ asset('assets/img/logo.png') }}" />
                </div>
                <div class="col-6 container-footer-text">
                    <p class="mb-0">
                        <b>E-Pedidos Delivery</b> &copy; Todos os direitos reservados.
                    </p>
                </div>
                <div class="col-3 container-media-footer">
                   <a class="btn btn-sm btn-white btn-social mr-3">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a class="btn btn-sm btn-white btn-social mr-3">
                        <i class="fab fa-facebook"></i>
                    </a>

                    <a class="btn btn-sm btn-white btn-social">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal-full" hidden="hidden" id="modalTray">
        <div class="m-header">
            <div class="container">
                <a class="btn btn-white btn-sm float-right">Fechar</a>

                <div class="steps">
                    <div class="step step1 active">1</div>
                    <div class="step step2">2</div>
                    <div class="step step3">3</div>
                </div>
                <p class="tray-title mt-4">
                    <b id="lbl-stepTitle">Sua bandeja:</b>
                </p>
            </div>
        </div>
        <div class="m-body">
            <div class="container">
                <div id="trayItems" class="row mx-0">
                    <div class="col-12 tray-item" hidden="">
                        <div class="img-product">
                            <img class="product-img" src="{{ asset('assets/img/cardapio/burguers/burger-au-poivre-kit-4-pack.3ca0e39b02db753304cd185638dad518.jpg') }}" />
                        </div>

                        <div class="product-data">
                            <p class="product-title"><b>Nome do produto</b></p>
                            <p class="product-price"><b>R$ 23,90</b></p>
                        </div>

                        <div class="add-tray">
                            <span class="btn-less"><i class="fas fa-minus"></i></span>
                            <span class="add-number-items">0</span>
                            <span class="btn-plus"><i class="fas fa-plus"></i></span>
                            <span class="btn btn-remove"><i class="fas fa-times"></i></span>
                        </div>
                    </div>
                </div>

                <div id="deliveryPlace" class="row mx-0" hidden="">
                    <div class="col-4">
                        <div class="form-group container-cep">
                            <label for="txtCEP"><b>Cep:</b></label>
                            <input type="text" id="txtCEP" class="form-control">
                            <a class="btn btn-yellow btn-sm"><i class="fa fa-search"></i></a>
                        </div>
                    </div>

                    <div class="col-8"></div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="txtEndereco"><b>Endereço</b></label>
                            <input type="text" id="txtEndereco" class="form-control">
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="txtBairro"><b>Bairro:</b></label>
                            <input type="text" id="txtBairro" class="form-control">
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="form-group">
                            <label for="txtBairro"><b>Número:</b></label>
                            <input type="text" id="txtBairro" class="form-control">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="txtCity"><b>Cidade</b></label>
                            <input type="text" id="txtCity" class="form-control">
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="txtComplement"><b>Complemento:</b></label>
                            <input type="text" id="txtComplement" class="form-control">
                        </div>
                    </div>

                    <div class="col-2 mb-5">
                        <div class="form-group">
                            <label for="txtUf"><b>UF:</b></label>
                            <select name="" id="ddlUf" class="form-control">
                                <option value="-1..."></option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div id="trayResume" class="row mx-0">
                    <div class="col-12">
                        <p class="tray-tittle mt-4">
                            <b>Itens do pedido:</b>
                        </p>
                    </div>

                    <div class="col-12">
                        <div class="row" id="resumeItemsList">

                            <div class="col-12 tray-item">
                                <div class="img-product">
                                    <img class="product-img" src="{{ asset('assets/img/cardapio/burguers/burger-au-poivre-kit-4-pack.3ca0e39b02db753304cd185638dad518.jpg') }}" />
                                </div>

                                <div class="product-data">
                                    <p class="resume-product-title">
                                        <b>Nome produto</b>
                                    </p>

                                    <p class="resume-product-price">
                                        <b>R$ 30,00</b>
                                    </p>
                                </div>

                                <p class="resume-product-quantity">
                                    x <b>3</b>
                                </p>

                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <p class="tray-tittle mt-4">
                            <b>Local da entrega:</b>
                        </p>
                    </div>

                    <div class="col-12 tray-item resume">
                        <div class="img-map">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>

                        <div class="product-data">
                            <p class="address-text">
                                <b id="addressResume">Rua de teste, 100, bairro teste</b>
                            </p>

                            <p class="cityAddress" id="cityAddress">
                                Cidade-RJ / 14711-000
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-footer">
            <div class="cotainer">
                <div class="container-total text-right mb-4">
                    <p class="mb-0">
                        <span>Subtotal</span>
                        <span id="lbl-subtotal">R$ 95,00</span>
                    </p>

                    <p class="mb-0 delivery-text">
                        <span><i class="fas fa-motorcycle"></i> Entrega: </span>
                        <span id="lbl-deliveryValue">+ R$ 5,00</span>
                    </p>

                    <p class="mb-0 total-text">
                        <span><b>Total</b></span>
                        <span class="totalValue" id="lbl-totalValue"><b>R$ 100,00</b></span>
                    </p>
                </div>

                <a class="btn btn-yellow float-right" id="btnOrderStep">Continuar</a>
                <a class="btn btn-yellow float-right" id="btnAddressStep" hidden>Revisar pedido</a>
                <a class="btn btn-yellow float-right" id="btnResumeStep" hidden>Enviar pedido</a>
                <a class="btn btn-white float-right mr-3" hidden id="btnBack">Voltar</a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.12.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr-3.5.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dados.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('.product-form').on('submit', function (e) {
                e.preventDefault(); // Impede o envio padrão do formulário

                const form = $(this);
                const url = "{{ route('cardapio.store') }}"; // URL do backend
                const formData = form.serialize(); // Serializa os dados do formulário, incluindo o `productId`

                $.ajax({
                    url: url,
                    method: "POST",
                    data: formData,
                    success: function (response) {
                        // Exibe uma mensagem de sucesso ou atualiza algo na página
                        $.toast({
                            heading: '<b>Que legal!</b>',
                            showHideTransition : 'slide',  // It can be plain, fade or slide
                            bgColor : '#2ecc71',
                            text: 'Item adicionado à sua bandeja.',
                            hideAfter : 8000,
                            position: 'top-right',
                            textColor: '#ecf0f1',
                            icon: 'success'
                        });
                    },
                    error: function (xhr, status, error) {
                        $.toast({
                            heading: '<b>Oopsss, algo errado aconteceu!</b>',
                            showHideTransition : 'slide',  // It can be plain, fade or slide
                            bgColor : 'red',
                            text: 'Não foi possível adicionar este item à sua bandeja.', // A mensagem que foi passada via session
                            hideAfter : 8000,
                            position: 'top-right',
                            textColor: 'white',
                            icon: 'error'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
