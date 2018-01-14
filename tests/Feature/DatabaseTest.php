<?php

namespace Tests\Feature;

use fantasias\Fornecedor;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFornecedorInDB()
    {
       $maria =(['nome'=>'Maria Barros',
            'revendedor'=>false]);

       $joao =(['nome'=>'João Thiago Samuel Cavalcanti',
           'revendedor'=>true]);

       $cesar = (['nome'=>'César Anthony João Martins',
           'revendedor'=>true]);

        $this->assertDatabaseHas('fornecedors',$maria);

        $this->assertDatabaseHas('fornecedors',$joao);

        $this->assertDatabaseHas('fornecedors',$cesar);
    }

    public  function testProdutoInDB()
    {
        $mascaraVader = (['imagePath'=>'https://rihappy.vteximg.com.br/arquivos/ids/290267-800-800/Fantasia-Curta---Star-Wars---Darth-Vader---Rubies.jpg?v=635737685896170000',
            'title'=>'Fantasia do Darth Vader',
            'descricao'=>'Venha para o lado negro divertido',
            'preco'=>125.00,
            'fornecedor_id'=>1 ]);
        $mascaraCafu = (['imagePath'=>'http://1.bp.blogspot.com/-ruuBUKmduyE/U5H45Xl3YZI/AAAAAAABaB4/89TgHN82H5E/s1600/3.png',
            'title'=>'Fantasia do Cafú',
            'descricao'=>'Olha o gooll',
            'preco'=>100.00,
            'fornecedor_id'=>2 ]);
        $mascaraCavalo = (['imagePath'=>'https://virtualshopp.com.br/ml/mascara-cavalo/anuncio/img/Mascara-de-Cavalo-Latex-Original-Pronto-Entrega.jpg',
            'title'=>'Máscara de Cavalo',
            'descricao'=>'*relinchos*',
            'preco'=>150.00,
            'fornecedor_id'=>3 ]);

        $this->assertDatabaseHas('produtos',$mascaraVader);

        $this->assertDatabaseHas('produtos',$mascaraCafu);

        $this->assertDatabaseHas('produtos',$mascaraCavalo);

    }

}
