<?php

namespace fantasias;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    public function fornecedor()
    {
        return $this->belongsTo('fantasias\fornecedor');
    }

    public function fornecedorLucro($cart,$fornecedor)
    {
        $mariaComissão = ($cart->getTotal() * 0.15);
        $fornecedor->lucro += ($cart->getTotal()+$cart->getFrete()) - $mariaComissão;
        $fornecedor->save();
        $maria = Fornecedor::find(1);
        $maria->lucro += $mariaComissão;
        $maria->save();
    }

    public function mariaLucro($cart,$fornecedor)
    {
        $fornecedor->lucro += ($cart->getTotal()+$cart->getFrete());
        $fornecedor->save();
    }

    public function makeVenda($venda,$nome,$cart)
    {
        $venda->nome_comprador =$nome;
        $venda->carrinho = serialize($cart);
        $venda->total_venda = $cart->getTotal() +$cart->getFrete();
        $venda->fornecedor_id = $cart->getFornecedor($cart->getItems());
        $venda->save();
    }
}
