<?php

use Illuminate\Database\Seeder;
use fantasias\Produto;
class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produto = new Produto(['imagePath'=>'https://rihappy.vteximg.com.br/arquivos/ids/290267-800-800/Fantasia-Curta---Star-Wars---Darth-Vader---Rubies.jpg?v=635737685896170000',
                                'title'=>'Fantasia do Darth Vader',
                                'descricao'=>'Venha para o lado negro divertido',
                                'preco'=>125.00,
                                'fornecedor_id'=>1 ]);
        $produto->save();
   
        $produto = new Produto(['imagePath'=>'http://1.bp.blogspot.com/-ruuBUKmduyE/U5H45Xl3YZI/AAAAAAABaB4/89TgHN82H5E/s1600/3.png',
        'title'=>'Fantasia do Cafú',
        'descricao'=>'Olha o gooll',
        'preco'=>100.00,
        'fornecedor_id'=>2 ]);
        $produto->save();
   
        $produto = new Produto(['imagePath'=>'https://virtualshopp.com.br/ml/mascara-cavalo/anuncio/img/Mascara-de-Cavalo-Latex-Original-Pronto-Entrega.jpg',
        'title'=>'Máscara de Cavalo',
        'descricao'=>'*relinchos*',
        'preco'=>150.00,
        'fornecedor_id'=>3 ]);
        $produto->save();
    }
}
