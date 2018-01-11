<?php

namespace fantasias;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['imagePath','title','descricao','preco','fornecedor_id'];


    public function fornecedor(){
        return $this->belongsTo('fantasias\Fornecedor');
     }
}

