@extends('layouts.master')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Seu total é:R$ {{$total}} </h4>
            @include('partials.form')
        </div>
    </div>
    <!-- Form -->
    <script !src="URL::to('src/js/pagarme.js')"></script>
@endsection
