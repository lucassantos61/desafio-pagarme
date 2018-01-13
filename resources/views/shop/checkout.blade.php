@extends('layouts.master')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Seu total é:R$ {{$total}} </h4>
            <div id="form">
                Número do cartão: <input type="text" id="card_number"/>
                <br/>
                Nome (como escrito no cartão): <input type="text" id="card_holder_name"/>
                <br/>
                Mês de expiração: <input type="text" id="card_expiration_month"/>
                <br/>
                Ano de expiração: <input type="text" id="card_expiration_year"/>
                <br/>
                Código de segurança: <input type="text" id="card_cvv"/>
                <br/>
                <div id="field_errors">
                </div>
                <br/>
            </div>
            <form id="payment_form" action="{{route('checkout')}}" method="POST">
                <input type="submit" id="pagar"></input>
                {{csrf_field()}}
            </form>
        </div>
    </div>

@endsection 
