<?php

namespace fantasias;

class Cart
{
    private $items;
    private $qtd;
    private $total;
    private $frete = 42.00;

    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this->items = $oldCart->items;
            $this->qtd = $oldCart->qtd;
            $this->total = $oldCart->total;
            $this->frete = $oldCart->frete;
        }
    }
    public function getItems()
    {
        return $this->items;
    }
    public function getQtd()
    {
        return $this->qtd;
    }
    public function getTotal()
    {
        return $this->total;
    }
    public function getFrete()
    {
        return $this->frete;
    }
    public function add($item, $id)
    {
        $storeItem = ['qtd' => 0,'preco'=>$item->preco, 'item'=> $item];
        if($this->items && array_key_exists($id,$this->items))
        {
            $storeItem = $this->items[$id];
        }
        $storeItem['qtd']++;
        $storeItem['preco'] = $item->preco * $storeItem['qtd'];
        $this->items[$id] = $storeItem;
        $this->qtd++;
        $this->total += ($item->preco);
    }

}