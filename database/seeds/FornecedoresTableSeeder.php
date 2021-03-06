<?php

use Illuminate\Database\Seeder;
use fantasias\Fornecedor;

class FornecedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
        {
            $fornecedor = new Fornecedor(['nome'=>'Maria Barros',
                                            'lucro'=>204.50 ,
                                            'revendedor'=>false]);
            $fornecedor->save();
            $fornecedor = new Fornecedor(['nome'=>'João Thiago Samuel Cavalcanti',
                                            'lucro'=>127.00,
                                            'revendedor'=>true]);
            $fornecedor->save();
            $fornecedor = new Fornecedor(['nome'=>'César Anthony João Martins',
                                            'lucro'=>169.50,
                                            'revendedor'=>true]);
            $fornecedor->save();
        }
}
