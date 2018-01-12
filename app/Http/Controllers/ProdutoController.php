<?php

namespace fantasias\Http\Controllers;


use fantasias\Produto;
use fantasias\Fornecedor;
use fantasias\Cart;

use Illuminate\Http\Request;
use Session;


class ProdutoController extends Controller
{
    public function getIndex()
    {  
        $produtos = Produto::All();
        return view('shop.index')->withProdutos($produtos);
    }

    public function getAddToCart(Request $request ,$id)
    {
        $produto = Produto::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null ;

        $cart = new Cart($oldCart);
        $cart->add($produto, $produto->id);
        $request->session()->put('cart',$cart);
        return redirect()->route('produto.index');
    }

    public function getCart()
    {
        if(!Session::has('cart'))
        {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('shop.shopping-cart',['produtos' => $cart->items,
                                          'total'=>$cart->total,
                                          'frete'=>$cart->frete]);
   
                                        }

    public function checkout()
    {
        $produtos = Produto::All();
        $sacola = array();
        foreach($produtos as $produto){
            $cart = new Cart($oldCart);
            $cart->add($produto, $produto->id);    
            $sacola[] = $cart->items;
        }
        return view('shop.checkout-pagarme',['sacola' => $sacola,
                                          'total'=>$cart->getFullPrice($sacola)+$cart->frete,
                                          'frete'=>$cart->frete]);
    }
}
