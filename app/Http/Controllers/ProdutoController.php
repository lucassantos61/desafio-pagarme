<?php

namespace fantasias\Http\Controllers;


use fantasias\Produto;
use fantasias\Fornecedor;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function getIndex()
    {  
        $produtos = Produto::All();
        return view('shop.index')->withProdutos($produtos);;
    }
}
