<?php

namespace fantasias;

use \PagarMe\Sdk\PagarMe;
use PagarMe\Sdk\PagarMeException;

class Pagamento
{
    CONST API_KEY = 'ek_test_Rf8Btaps2dLMYFXope3rwFJGliFHdy';

    public function makeTransaction($customerInfo,$cardHash,$id,$total)
    {
        $pagarMe = new \PagarMe\Sdk\PagarMe(API_KEY);

        $amount = $total;
        $installments = 1;
        $capture = true;
        $postbackUrl = 'http://requestb.in/pkt7pgpk';
        $metadata = ['idProduto' => $id];


        try
        {
            $customer = $this->createCustomer($pagarMe,$customerInfo);
            $card = $this->createCard($pagarMe,$cardHash);
            $transaction = $pagarMe->transaction()->creditCardTransaction(
                $amount,
                $card,
                $customer,
                $installments,
                $capture,
                $postbackUrl,
                $metadata
            );
        }catch (PagarMeException $p)
        {
            return $p->getMessage();
        }

    }

    private function createCustomer(\PagarMe\Sdk\PagarMe $pagarMe, $customerInfo)
    {
        $customer = new \PagarMe\Sdk\Customer\Customer(
            [
                'name' => $customerInfo['nome'],
                'email' => $customerInfo['email'],
                'document_number' => $customerInfo['fone'],
                'address' => [
                    'street'        => $customerInfo['rua'],
                    'street_number' => $customerInfo['numero'],
                    'neighborhood'  => $customerInfo['bairro'],
                    'zipcode'       => $customerInfo['cep'],
                    'complementary' => $customerInfo['complement'],
                    'city'          => $customerInfo['cidade'],
                    'state'         => 'Sao Paulo',
                    'country'       => 'Brasil'
                ],
                'phone' => [
                    'ddd'    => $customerInfo['ddd'],
                    'number' =>$customerInfo['fone']
                ],
                'born_at' => $customerInfo['data_nasc'],
                'sex' => $customerInfo['sexo']
            ]
        );
        return $customer;
    }

    private function createCard(\PagarMe\Sdk\PagarMe $pagarMe, $cardHash)
    {

        $card = $pagarMe->card()->createFromHash($cardHash);

        return $card;
    }

}