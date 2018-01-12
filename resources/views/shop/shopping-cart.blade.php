@extends('layouts.master')

@section('title')
    Carrinho
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">

                <ul class="list-group"></ul>
                @foreach($produtos as $produto)
                    <li class="list-group-item">
                        <span class="badge">{{$produto['qtd']}}</span>
                        <strong>{{$produto['item']['title']}}</strong>
                        <strong>Feito:{{$produto['item']->fornecedor->nome}}</strong>
                        <span class="label label-success">{{$produto['preco']}}</span>
                        <div class="btn-group">
                        <button type="button" class="btn btn-xs btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Remover
                           <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Remover 1</a>
                            <a class="dropdown-item" href="#">Remover todos</a>
                        </div>
                        </div>
                    </li>
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
                <button type="button" class="btn btn-success">
                        Finalizar
                </button>
            </div>
        </div>
    @else
    <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Carrinho vazio</strong>
    </div>
    @endif
@endsection