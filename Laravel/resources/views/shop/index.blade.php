@extends('layouts.master')

@section('title')
    PetShop
@endsection

@section('content')

    @foreach($produtos->chunk(3) as $produto)
    <div class="row">
        @foreach($produto as $prod)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ $prod->imagem }}" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>{{ $prod->nome }}</h3>
                    <div class="clearfix">
                        <div class="pull-left price">R$ "{{ $prod->preco }}"</div>
                        <a href="{{ route('produto.addCart', ['id' => $prod->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

@endsection
