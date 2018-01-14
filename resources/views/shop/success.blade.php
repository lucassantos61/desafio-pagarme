@extends('layouts.master')

@section('title')
    Sucesso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h1 class="success text-center">Sucesso!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <p class="text-center">Suas fantasias chegarão, em breve. Aguarde o contato do fornecedor e aproveite a festa!</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="text-center">
                    <a href="{{route('produto.index')}}" class="btn btn-primary btn-lg">Realizar outra compra</a>
                </div>
            </div>
        </div>
    </div>
@endsection