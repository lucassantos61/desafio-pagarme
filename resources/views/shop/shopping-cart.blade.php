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
                        <span class="label label-success">R${{$produto['preco']}}</span>
                        <div class="btn-group">
                            <a class="item"  class="btn btn-xs btn-default dropdown-toggle" href="{{route('produto.removeById', ['id' =>$produto['item']['id']])}}">Remover</a>
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
                <a href="{{route('checkout')}}" type="button" class="btn btn-success">
                        Finalizar
                </a>
            </div>
        </div>
    @else
    <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Carrinho vazio</strong>
    </div>
    @endif
@endsection