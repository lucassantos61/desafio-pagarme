@extends('layouts.master')

@section('title')
    Maria Fantasias
@endsection
@section('content')
@foreach($produtos as $produto)
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{$produto->imagePath}}" 
      alt="fantasia darth vaider" class="img-responsive">
      <div class="caption">
        <h3>{{$produto->title}}</h3>
        <p class = "description">{{$produto->descricao}}</p>
        <div  class="clearfix">
            <div class="pull-left price">R$ {{$produto->preco}}</div>
            <div class="ajuste">Feito por:{{$produto->fornecedor->nome}}</div>
            <a href="{{route('produto.addToCart',['id' => $produto->id])}}" class="btn btn-success pull-right" role="button">Add To Cart</a>
        </div>
      </div>
    </div>
  </div>

@endforeach

@endsection
