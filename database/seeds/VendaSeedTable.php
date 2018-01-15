<?php

use Illuminate\Database\Seeder;
use fantasias\Venda;
class VendaSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venda = new Venda(['nome_comprador'=>'Lucas Ferreira',
        'carrinho'=>'O:14:"fantasias\Cart":4:{s:21:" fantasias\Cart items";
                    a:1:{i:1;a:3:{s:3:"qtd";i:1;s:5:"preco";d:125;s:4:"item";
                    O:17:"fantasias\Produto":26:{s:11:" * fillable";a:5:{i:0;s:9:"imagePath";i:1;s:5:"title";i:2;s:9:"descricao";i:3;s:5:"preco";i:4;s:13:"fornecedor_id";}s:13:" * connection";s:5:"mysql";s:8:" * table";N;s:13:" * primaryKey";s:2:"id";s:10:" * keyType";s:3:"int";s:12:"incrementing";b:1;s:7:" * with";a:0:{}s:12:" * withCount";a:0:{}s:10:" * perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:" * attributes";a:8:{s:2:"id";i:1;s:10:"created_at";s:19:"2018-01-15 12:03:10";s:10:"updated_at";s:19:"2018-01-15 12:03:10";s:9:"imagePath";s:133:"https://rihappy.vteximg.com.br/arquivos/ids/290267-800-800/Fantasia-Curta---Star-Wars---Darth-Vader---Rubies.jpg?v=635737685896170000";s:5:"title";s:23:"Fantasia do Darth Vader";s:9:"descricao";s:33:"Venha para o lado negro divertido";s:5:"preco";d:125;s:13:"fornecedor_id";i:1;}s:11:" * original";a:8:{s:2:"id";i:1;s:10:"created_at";s:19:"2018-01-15 12:03:10";s:10:"updated_at";s:19:"2018-01-15 12:03:10";s:9:"imagePath";s:133:"https://rihappy.vteximg.com.br/arquivos/ids/290267-800-800/Fantasia-Curta---Star-Wars---Darth-Vader---Rubies.jpg?v=635737685896170000";s:5:"title";s:23:"Fantasia do Darth Vader";s:9:"descricao";s:33:"Venha para o lado negro divertido";s:5:"preco";d:125;s:13:"fornecedor_id";i:1;}s:10:" * changes";a:0:{}s:8:" * casts";a:0:{}s:8:" * dates";a:0:{}s:13:" * dateFormat";N;s:10:" * appends";a:0:{}s:19:" * dispatchesEvents";a:0:{}s:14:" * observables";a:0:{}s:12:" * relations";a:0:{}s:10:" * touches";a:0:{}s:10:"timestamps";b:1;s:9:" * hidden";a:0:{}s:10:" * visible";a:0:{}s:10:" * guarded";a:1:{i:0;s:1:"*";}}}}s:19:" fantasias\Cart qtd";i:1;s:21:" fantasias\Cart total";d:125;s:21:" fantasias\Cart frete";d:42;}',
        'total_venda'=>167.00,
        'fornecedor_id'=>1 ]);
        $venda->save();
        $venda = new Venda(['nome_comprador'=>'Cafú da silva',
        'carrinho'=>'O:14:"fantasias\Cart":4:{s:21:" fantasias\Cart items";a:1:{i:2;a:3:{s:3:"qtd";i:1;s:5:"preco";d:100;s:4:"item";O:17:"fantasias\Produto":26:{s:11:" * fillable";a:5:{i:0;s:9:"imagePath";i:1;s:5:"title";i:2;s:9:"descricao";i:3;s:5:"preco";i:4;s:13:"fornecedor_id";}s:13:" * connection";s:5:"mysql";s:8:" * table";N;s:13:" * primaryKey";s:2:"id";s:10:" * keyType";s:3:"int";s:12:"incrementing";b:1;s:7:" * with";a:0:{}s:12:" * withCount";a:0:{}s:10:" * perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:" * attributes";a:8:{s:2:"id";i:2;s:10:"created_at";s:19:"2018-01-15 12:03:10";s:10:"updated_at";s:19:"2018-01-15 12:03:10";s:9:"imagePath";s:85:"http://1.bp.blogspot.com/-ruuBUKmduyE/U5H45Xl3YZI/AAAAAAABaB4/89TgHN82H5E/s1600/3.png";s:5:"title";s:17:"Fantasia do Cafú";s:9:"descricao";s:12:"Olha o gooll";s:5:"preco";d:100;s:13:"fornecedor_id";i:2;}s:11:" * original";a:8:{s:2:"id";i:2;s:10:"created_at";s:19:"2018-01-15 12:03:10";s:10:"updated_at";s:19:"2018-01-15 12:03:10";s:9:"imagePath";s:85:"http://1.bp.blogspot.com/-ruuBUKmduyE/U5H45Xl3YZI/AAAAAAABaB4/89TgHN82H5E/s1600/3.png";s:5:"title";s:17:"Fantasia do Cafú";s:9:"descricao";s:12:"Olha o gooll";s:5:"preco";d:100;s:13:"fornecedor_id";i:2;}s:10:" * changes";a:0:{}s:8:" * casts";a:0:{}s:8:" * dates";a:0:{}s:13:" * dateFormat";N;s:10:" * appends";a:0:{}s:19:" * dispatchesEvents";a:0:{}s:14:" * observables";a:0:{}s:12:" * relations";a:0:{}s:10:" * touches";a:0:{}s:10:"timestamps";b:1;s:9:" * hidden";a:0:{}s:10:" * visible";a:0:{}s:10:" * guarded";a:1:{i:0;s:1:"*";}}}}s:19:" fantasias\Cart qtd";i:1;s:21:" fantasias\Cart total";d:100;s:21:" fantasias\Cart frete";d:42;}',
        'total_venda'=>142.00,
        'fornecedor_id'=>2 ]);
        $venda->save();
        $venda = new Venda(['nome_comprador'=>'Pablo Vittar',
        'carrinho'=>' O:14:"fantasias\Cart":4:{s:21:" fantasias\Cart items";a:1:{i:3;a:3:{s:3:"qtd";i:1;s:5:"preco";d:150;s:4:"item";O:17:"fantasias\Produto":26:{s:11:" * fillable";a:5:{i:0;s:9:"imagePath";i:1;s:5:"title";i:2;s:9:"descricao";i:3;s:5:"preco";i:4;s:13:"fornecedor_id";}s:13:" * connection";s:5:"mysql";s:8:" * table";N;s:13:" * primaryKey";s:2:"id";s:10:" * keyType";s:3:"int";s:12:"incrementing";b:1;s:7:" * with";a:0:{}s:12:" * withCount";a:0:{}s:10:" * perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:" * attributes";a:8:{s:2:"id";i:3;s:10:"created_at";s:19:"2018-01-15 12:03:10";s:10:"updated_at";s:19:"2018-01-15 12:03:10";s:9:"imagePath";s:109:"https://virtualshopp.com.br/ml/mascara-cavalo/anuncio/img/Mascara-de-Cavalo-Latex-Original-Pronto-Entrega.jpg";s:5:"title";s:18:"Máscara de Cavalo";s:9:"descricao";s:11:"*relinchos*";s:5:"preco";d:150;s:13:"fornecedor_id";i:3;}s:11:" * original";a:8:{s:2:"id";i:3;s:10:"created_at";s:19:"2018-01-15 12:03:10";s:10:"updated_at";s:19:"2018-01-15 12:03:10";s:9:"imagePath";s:109:"https://virtualshopp.com.br/ml/mascara-cavalo/anuncio/img/Mascara-de-Cavalo-Latex-Original-Pronto-Entrega.jpg";s:5:"title";s:18:"Máscara de Cavalo";s:9:"descricao";s:11:"*relinchos*";s:5:"preco";d:150;s:13:"fornecedor_id";i:3;}s:10:" * changes";a:0:{}s:8:" * casts";a:0:{}s:8:" * dates";a:0:{}s:13:" * dateFormat";N;s:10:" * appends";a:0:{}s:19:" * dispatchesEvents";a:0:{}s:14:" * observables";a:0:{}s:12:" * relations";a:0:{}s:10:" * touches";a:0:{}s:10:"timestamps";b:1;s:9:" * hidden";a:0:{}s:10:" * visible";a:0:{}s:10:" * guarded";a:1:{i:0;s:1:"*";}}}}s:19:" fantasias\Cart qtd";i:1;s:21:" fantasias\Cart total";d:150;s:21:" fantasias\Cart frete";d:42;}',
        'total_venda'=>192.00,
        'fornecedor_id'=>3 ]);
        $venda->save();
    }
}
