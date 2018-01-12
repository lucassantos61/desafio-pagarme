<?php 

namespace fantasias;

class Cart
{
    public $items;
    public $qtd;
    public $total;
    public $frete = 42.00;

    public function __constrcut($oldCart)
    {
        if($oldCart)
        {
            $this->items = $oldCart->items;
            $this->qtd = $oldCart->qtd;
            $this->total = $oldCart->frete;
        }
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
        $this->qtd++;
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