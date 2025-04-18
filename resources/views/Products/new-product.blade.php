@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('title')
    Cadastrar produto
@endsection

<style>
    .variableProduct{
        display: none;
    }
</style>

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Profile'])
    <div class="container-fluid py-4">
        <div class="row">
            <form action="{{ route('produtos.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">Novo produto</h3>
                                <button class="btn btn-primary ms-auto saveProduct"><i class="fa-solid fa-plus"></i> Cadastrar</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-sm">Cadastre um novo produto para o cardápio</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nome</label>
                                        <input class="form-control productName" type="text" placeholder="Nome do produto" name="name" value="{{ old('name') }}" required>
                                        <label class="text-danger label-check">Já existe um item com o nome <span class="item-error"></span>. Por favor, escolha outro nome.</label>
                                        @error('name')
                                        <span class="text-danger" style="font-size: 13.5px;"><b><i class="fa-solid fa-circle-info"></i> {{ $message }}</b></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tipo de produto</label>
                                        <select class="form-control type" name="type">
                                            <option {{ old('type') == null ? 'selected' : '' }} disabled>Selecione</option>
                                            <option {{ old('type') == 'Comida' ? 'selected' : '' }}>Comida</option>
                                            <option {{ old('type') == 'Bebida' ? 'selected' : '' }} >Bebida</option>
                                            <option {{ old('type') == 'Sobremesa' ? 'selected' : '' }} >Sobremesa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 variableProduct">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Estoque</label>
                                        <input class="form-control" type="number" name="stock" value="{{ old('stock') }}" placeholder="Quantidade em estoque">
                                        @error('stock')
                                        <span class="text-danger" style="font-size: 13.5px;"><b><i class="fa-solid fa-circle-info"></i> {{ $message }}</b></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3 variableProduct">
                                    <div class="form-group">
                                        <input type="checkbox" name="is_available" id="available" style="margin-top: 45px;" checked>
                                        <label for="available">Disponível em estoque</label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Valor</label>
                                        <input class="form-control value" type="text" name="price" value="{{ old('price') }}" placeholder="Preço deste item" required>
                                        @error('price')
                                        <span class="text-danger" style="font-size: 13.5px;"><b><i class="fa-solid fa-circle-info"></i> {{ $message }}</b></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="image">Imagem do produto:</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>

                                <hr class="horizontal dark">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Descrição</label>
                                        <textarea name="description" value="{{ old('description') }}" cols="10" rows="5" class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(".type").on('change', function (){
            console.log($(".type").val());
            if($(".type").val() != 'Comida'){
                $(".variableProduct").fadeIn();
            }else{
                $(".variableProduct").fadeOut();
            }
        });
    </script>

    @if(session('msg-error'))
    <script>
        $.toast({
            heading: '<b>Não foi possível realizar o cadastro!</b>',
            showHideTransition : 'slide',  // It can be plain, fade or slide
            bgColor : 'red',
            text: '<b>{{ session('msg-error') }}</b>', // A mensagem que foi passada via session
            hideAfter : 12000,
            position: 'top-right',
            textColor: 'white',
            icon: 'error'
        });
    </script>
    @endif

    @if(session('error'))
        <script>
            $.toast({
                heading: '<b>Não foi possível realizar o cadastro!</b>',
                showHideTransition : 'slide',  // It can be plain, fade or slide
                bgColor : 'red',
                text: '<b>{{ session('error') }}</b>', // A mensagem que foi passada via session
                hideAfter : 12000,
                position: 'top-right',
                textColor: 'white',
                icon: 'error'
            });
        </script>
    @endif

    @if(session('msg'))
        <script>
            $.toast({
                heading: '<b>Produto cadastrado com sucesso!</b>',
                showHideTransition : 'slide',  // It can be plain, fade or slide
                bgColor : '#2D2D2D',
                hideAfter : 5000,
                position: 'top-right',
                textColor: 'white',
                icon: 'warning',
                showHideTransition: 'plain'
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            $.toast({
                heading: '<b>Arquivo incompatível!</b>',
                showHideTransition : 'slide',  // It can be plain, fade or slide
                bgColor : 'red',
                text: 'Formato de imagem não suportado.',
                hideAfter : 5000,
                position: 'top-right',
                textColor: 'white',
                icon: 'warning',
                showHideTransition: 'plain'
            });
        </script>
    @endif

    <script>
        $(document).ready(function(){
            $('.value').mask('000,000,000.00', {reverse: true});
            $(".label-check").hide();

            $(".productName").on('click', function (){
                $(".label-check").fadeOut();
            });

            $(".saveProduct").on('click', function (){
                $(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Cadastrar');
            });

            $(".productName").on('keyup', function(){

                let nome = $(".productName").val();

                $.ajax({
                    url: "{{ route('verificarNomeProduto') }}",
                    method: "GET",
                    data: {name: nome},
                    success: function (response) {
                        if (response.success == false){
                            $(".label-check").fadeIn();
                            $(".item-error").text(nome);
                            $(".saveProduct").prop('disabled', true);

                        }else{
                            $(".label-check").fadeOut();
                            $(".saveProduct").prop('disabled', false);
                        }
                    },
                    error: function () {
                        console.error("Erro ao fazer verificação de nome.");
                    }
                });
            });
        });
    </script>
@endsection
