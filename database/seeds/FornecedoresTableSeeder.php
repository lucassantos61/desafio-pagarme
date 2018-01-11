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
                                            'lucro'=>0.0]);
            $fornecedor->save();
            $fornecedor = new Fornecedor(['nome'=>'João Thiago Samuel Cavalcanti',
                                            'lucro'=>0.0]);
            $fornecedor->save();
            $fornecedor = new Fornecedor(['nome'=>'César Anthony João Martins',
                                            'lucro'=>0.0]);
            $fornecedor->save();
        }
}
