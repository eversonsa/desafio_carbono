@extends('layout')

@section('conteudo')

    <section class="container busca mt-4">
        <label for="Busca">Busca</label>
        <input type="text">
    </section>

    <section class="container mt-4">

        <div class="row">
            @foreach ($produtos->imoveis as $item)

            <div class="col-sm-12 col-md-4 mb-5">
                <p>{{$item->nome}} {{$item->medida}}</p>
                <p>{{$item->bairro}}, {{$item->cidade}}</p>
                @if ($item->destaque === 'on')
                    <img src="img/destaque.png" alt="Imagem" class="destaque">
                @endif

                <div class="fotos mt-1">
                    <img src="img/fotos1.jpg" alt="Foto do imovel">
                    <img src="img/fotos2.jpg" alt="Foto do imovel">
                    <img src="img/fotos3.jpg" alt="Foto do imovel">
                    <img src="img/fotos3.jpg" alt="Foto do imovel">
                    <hr class="linha">
                    <div class="preco">
                        <span>{{$item->medida}}</span>
                        <span>{{$item->valor}}</span>
                    </div>
                <p class="text-center">Cód: {{$item->codigo}}</p>
                </div>

            </div>
             @endforeach
        </div>

    </section>


 @endsection



