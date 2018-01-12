@extends('layouts.master')

@section('title')
    Carrinho
@endsection

@section('content')
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">

                <ul class="list-group"></ul>
                @foreach($sacola as $produtos)
                    @foreach($produtos as $produto)
                    <li class="list-group-item">
                        <span class="badge">{{$produto['qtd']}}</span>
                        <strong>{{$produto['item']['title']}}</strong>
                        <strong>Feito:{{$produto['item']->fornecedor->nome}}</strong>
                        <span class="label label-success">R${{$produto['preco']}}</span>
                    </li>
                    @endforeach
                @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Frete: R${{$frete}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{$total}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <button id="pay-button" type="button" class="btn btn-success">
                        Finalizar
                </button>
              
            </div>
        </div>
        @include('partials.checkout-transparente')
@endsection