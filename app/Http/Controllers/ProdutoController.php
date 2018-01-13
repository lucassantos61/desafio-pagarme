<?php

namespace fantasias\Http\Controllers;


use fantasias\Produto;
use fantasias\Fornecedor;
use fantasias\Cart;
use Illuminate\Http\Request;
use fantasias\Pagamento;
use Session;


class ProdutoController extends Controller
{
    public function getIndex()
    {  
        $produtos = Produto::All();
        return view('shop.index')->withProdutos($produtos);;
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

        return view('shop.shopping-cart',['produtos' => $cart->getItems(),
                                          'total'=>$cart->getTotal()+$cart->getFrete(),
                                          'frete'=>$cart->getFrete()]);
    }

    public function getCheckout()
    {
        if(!Session::has('cart'))
        {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->getTotal()+$cart->getFrete();
        return view('shop.checkout')->withTotal($total);
    }

    public function postCheckout(Request $request)
    {
        dd($request->all());
        if(!Session::has('cart'))
        {
            return redirect()->route('produto.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $pagamento = new Pagamento();
    }
}
