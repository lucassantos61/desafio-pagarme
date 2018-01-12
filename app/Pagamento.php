<?php 
namespace fantasias;


class Pagamento
{
    private $apiKey = 'ek_test_Rf8Btaps2dLMYFXope3rwFJGliFHdy';
    public function new()
    {
        $pagarMe =  new \PagarMe\Sdk\PagarMe($apiKey);
    }
    
}
