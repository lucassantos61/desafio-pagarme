<?php

namespace fantasias;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['nome','lucro'];

    public function produtos(){
        return $this->hasMany('fantasias\Produto');
     }
}
