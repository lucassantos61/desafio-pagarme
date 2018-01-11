<?php

namespace fantasias;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['nome','lucro','revendedor'];

    public function produtos(){
        return $this->hasMany('fantasias\Produto');
     }
}
