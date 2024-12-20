@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('title')
    Cadastrar produto
@endsection

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Profile'])
    <div class="container-fluid py-4">
        <div class="row">
            <form action="{{ route('produtos.update', $product->id),  }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">{{ $product->name }}</h3>
                                <button class="btn btn-primary btn-sm ms-auto">Salvar alterações</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-sm">Edite os dados cadastrais deste produto</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nome</label>
                                        <input class="form-control" type="text" placeholder="Nome do produto" name="name" value="{{ $product->name }}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tipo de produto</label>
                                        <select class="form-control" name="type">
                                            <option selected disabled>Selecione</option>
                                            <option value="Comida" @selected($product->type == "Comida")>Comida</option>
                                            <option value="Bebida" @selected($product->type == "Bebida")>Bebida</option>
                                            <option value="Sobremesa" @selected($product->type == "Sobremesa")>Sobremesa</option>
                                        </select>
                                    </div>
                                </div>
                                @if($product->type != "Comida")
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Estoque</label>
                                            <input class="form-control" type="number" name="stock" value="{{ $product->stock }}" placeholder="Quantidade em estoque">
                                        </div>
                                    </div>
                                @endif

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="checkbox" name="is_available" id="available" style="margin-top: 45px;" @checked($product->is_available)>
                                        <label for="available">Disponível
                                            @if($product->type == "Comida")
                                                para venda
                                            @else
                                                em estoque
                                            @endif
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    @if(count($additionals) != 0)
                                        <hr class="horizontal dark">
                                        <p class="text-md font-weight-bold">Adicionais para este produto</p>
                                        @foreach($additionals as $additional)
                                            @if($additional->benefitedProduct == $product->type)
                                                <input type="checkbox" name="additionals[]" id="additionals{{ $additional->id }}" value="{{ $additional->id }}"
                                                    @php
                                                        $items = explode(',', $product->additionals);
                                                        if (in_array($additional->id, $items)){
                                                           echo 'checked';
                                                        }
                                                    @endphp>
                                                <label for="additionals{{ $additional->id }}" style="margin-right: 30px;">{{ $additional->name }}</label>
                                            @endif
                                        @endforeach
                                        <hr>
                                    @endif
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Descrição</label>
                                        <textarea name="description" id="" cols="10" rows="5" class="form-control" required>{{ $product->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('produtos.destroy', $product->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mb-0" type="submit">Deletar produto</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @if(session('msg-updated'))
        <script>
            $.toast({
                heading: '<b>Alterações realizadas com sucesso!</b>',
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
@endsection
