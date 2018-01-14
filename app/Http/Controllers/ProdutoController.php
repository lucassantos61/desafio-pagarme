<?php

namespace fantasias\Http\Controllers;


use fantasias\Produto;
use fantasias\Fornecedor;
use fantasias\Cart;
use fantasias\Pagamento;
use fantasias\Venda;
use \PagarMe\Sdk\PagarMe;
use PagarMe\Sdk\PagarMeException;
use Illuminate\Http\Request;

use Session;


class ProdutoController extends Controller
{
    public function getIndex()
    {
        $produtos = Produto::All();
        return view('shop.index')->withProdutos($produtos);
    }

    public function getAddToCart(Request $request, $id)
    {
        $produto = Produto::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($produto, $produto->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('checkout');
    }
    public function removeById($id)
    {
        $produto = Produto::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->removeOne($id);
        if($cart->getQtd() > 0)
        {
            Session::put('cart',$cart);
            return redirect()->route(   'produto.index');

        }

        Session::forget('cart');
        return redirect()->route(   'produto.index');

    }
    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('shop.shopping-cart', ['produtos' => $cart->getItems(),
            'total' => $cart->getTotal() + $cart->getFrete(),
            'frete' => $cart->getFrete()]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->getTotal() + $cart->getFrete();
        return view('shop.checkout')->withTotal($total);
    }

    public function finishVenda(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('produto.index');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $venda = new Venda();

        $customer = $request->except('_token');
        if(array_key_exists("card_hash",$customer))
        {
            $pagamento = new Pagamento();
            $pagamento->makeTransaction($customer,$cart->getTotal());

        }
        $venda->makeVenda($venda,$customer['nome'],$cart);

        $fornecedor = Fornecedor::find($cart->getFornecedor($cart->getItems()));
        if ($fornecedor->revendedor)
        {
            $venda->fornecedorLucro($cart,$fornecedor);
            Session::forget('cart');
            return view('shop.success');
        }
        $venda->mariaLucro($cart,$fornecedor);
        Session::forget('cart');
        return view('shop.success');


    }
}
