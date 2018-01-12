<?php 

namespace fantasias;

class Cart
{
    private $items;
    private $qtdProd;
    private $total;
    private $frete = 42.00;

    public function __construct($oldCart)
    {
 
        if($oldCart)
        {
            $this->items = $oldCart->items;
            $this->qtdProd = $oldCart->qtdProd;
            $this->total = $oldCart->total;
        }
    }
    public function getFrete()
    {
        return $this->frete;
    }

    public function getQtd()
    {
        return $this->qtdProd;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function add($item,$id)
    {
        $storeOrderItem = ['qtd' => 0 ,
                            'preco' => $item->preco,
                            'item'=> $item];

        if($this->items && array_key_exists($id,$this->items))
        {
            $storeOrderItem = $this->items[$id];
        }
        $storeOrderItem['qtd']++;
        $storeOrderItem['preco'] = $item->preco * $storeOrderItem['qtd'];
        $this->items['$id'] = $storeOrderItem;
        $this->qtdProd++;
        $this->total += $item->preco; 
    }

    public function getFullPrice($sacola)
    {
        $this->total = 0;
      
        foreach($sacola as $produtos)
        {
            foreach($produtos as $produto)
            {
                $this->total += $produto['preco'];
            }
        }
        return $this->total;
    }
}