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
    public function getFornecedor($items)
    {

        foreach ($items as $item)
        {
            foreach ($item as $produto)
            {
                if(!is_null($produto['fornecedor_id']))
                $fornecedorId = $produto['fornecedor_id'];
            }

        }
        return $fornecedorId;
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

    public function removeOne($id)
    {
        if($this->items[$id]['qtd'] <= 0)
        {
            unset($this->items['id']);
            return;
        }
        $this->items[$id]['qtd']-- ;
        $this->items[$id]['preco'] -= $this->items[$id]['item']['preco'];
        $this->qtd--;
        $this->total -= $this->items[$id]['item']['preco'];


    }

}