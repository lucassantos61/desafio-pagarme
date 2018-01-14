<?php

namespace fantasias;

use \PagarMe\Sdk\PagarMe;
use PagarMe\Sdk\PagarMeException;

class Pagamento
{
   private $api_key = 'ek_test_Rf8Btaps2dLMYFXope3rwFJGliFHdy';

    public function makeTransaction($customerInfo,$total)
    {
        $pagarMe = new \PagarMe\Sdk\PagarMe($this->api_key);

        $amount = $total;
        $installments = 1;
        $capture = true;
        $postbackUrl = 'http://requestb.in/pkt7pgpk';
        $metadata = ['idProduto' => 1];


        try
        {
            $customer = $this->createCustomer($customerInfo);
            $card = $this->createCard($pagarMe);
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
        return $transaction ? true : false;
    }

    private function createCustomer($customerInfo)
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
                    'city'          => $customerInfo['cidade'],
                    'state'         => 'Sao Paulo',
                    'country'       => 'Brasil'
                ],
                'phone' => [
                    'ddd'    => $customerInfo['ddd'],
                    'number' =>$customerInfo['fone']
                ]
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