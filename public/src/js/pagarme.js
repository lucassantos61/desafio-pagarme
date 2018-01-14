
$(document).ready(function() {
    var form = $("#payment_form")


        event.preventDefault();
        var card = {}
        var creditCard = new PagarMe.creditCard();
        creditCard.cardHolderName = $("#payment_form #card_holder_name").val();
        creditCard.cardExpirationMonth = $("#payment_form #card_expiration_month").val();
        creditCard.cardExpirationYear = $("#payment_form #card_expiration_year").val();
        creditCard.cardNumber = $("#payment_form #card_number").val();
        creditCard.cardCVV = $("#payment_form #card_cvv").val();

        // pega os erros de validação nos campos do form e a bandeira do cartão
        var cardValidations = pagarme.validate({card: card})

        //Então você pode verificar se algum campo não é válido
        if(!cardValidations.card.card_number)
            console.log('Oops, número de cartão incorreto')

        //Mas caso esteja tudo certo, você pode seguir o fluxo
        pagarme.client.connect({ encryption_key: 'ek_test_Rf8Btaps2dLMYFXope3rwFJGliFHdy' })
            .then(client => client.security.encrypt(card))
    .then(card_hash => console.log(card_hash))
        // o próximo passo aqui é enviar o card_hash para seu servidor, e
        // em seguida criar a transação/assinatura
        console.log(cardHash);
        form.append($('<input type="hidden" name="card_hash">').val(cardHash));
        return false

});