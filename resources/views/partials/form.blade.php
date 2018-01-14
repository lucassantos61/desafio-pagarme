<form id="payment_form" action="{{route('checkout')}}" method="POST">
    <!-- Customer Data -->
    <label class="master-bold">
        Dados do Cliente <i class="fa fa-user-o" aria-hidden="true"></i>
    </label>
    <div class="form-group">
        <input type="text" name="nome" id="full-name" class="form-control" placeholder="Nome Completo ou Razão Social" required>
    </div>
    <div class="form-group">
        <input type="text" name="document_number" id="document-number" class="form-control" placeholder="CPF ou CNPJ" pattern="[0-9]{1,14}" required>
    </div>
    <div class="form-group">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="form-group">
        <input type="text" name="rua" id="address" class="form-control" placeholder="Rua">
    </div>
    <div class="form-group">
        <input type="text" name="numero" id="address-number" class="form-control" placeholder="Número" size="5">
    </div>
    <div class="form-group">
        <input type="text" name="bairro" id="address-neighborhood" class="form-control" placeholder="Bairro">
    </div>
    <div class="form-group">
        <input type="text" name="cep" id="address-zipcode" class="form-control" placeholder="CEP" size="8">
    </div>
    <div class="form-group">
        <input type="text" name="cidade" id="address-city" class="form-control" placeholder="Cidade">
    </div>
    <div class="form-group">
        <input type="text" name="estado" id="address-state" class="form-control" placeholder="Estado" size="8">
    </div>
    <div class="form-group">
        <input type="text" name="ddd" id="phone-ddd" class="form-control" placeholder="DDD">
    </div>
    <div class="form-group">
        <input type="text" name="fone" id="phone-number" class="form-control" placeholder="Telefone">
    </div>
    <!-- Customer Data -->

    <!-- Payment Data -->
    <div class="form-group">
        <label for="payment-method" class="master-bold">
            Método de Pagamento <i class="fa fa-credit-card" aria-hidden="true"></i>
        </label>
        <select name="payment-method" id="payment-method" class="form-control">
            <option value="credit-card">Cartão de Crédito</option>
        </select>
    </div>
    <div class="input-group">
        <input type="text" name="card_number" class="form-control" id="card-number" minlength="16" maxlength="16" placeholder="Número do Cartão" required>
        <span class="input-group-addon">/</span>
        <input type="text" name="ccv" class="form-control" id="card_cvv"placeholder="CCV" maxlength="3" size="3">
    </div>
    <div class="form-group">
        <input type="text" name="holder_name" id="holder-name" class="form-control" placeholder="Portador do Cartão">
    </div>
    <div class="input-group">
        <input type="text" name="month" class="form-control" id="card_expiration_month" placeholder="Mês de Expiração (MM)" pattern="[0-9]{1,2}" maxlength="2" size="2" required>
        <span class="input-group-addon">/</span>
        <input type="text" name="year" class="form-control" id="card_expiration_year" placeholder="Ano de Expiração (AA)" pattern="[0-9]{1,2}" maxlength="2" size="2" required>
    </div>
    <!-- Payment Data -->

    <br>
    <button type="submit" class="btn btn-success btn-lg btn-block">Enviar</button>
    {{csrf_field()}}
</form>