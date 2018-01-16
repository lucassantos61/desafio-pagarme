<h1>Projeto Marktplace feito para PagarMe</h1>
<h2>Tecnologias usadas</h2>
    <ul>
        <li>IDE: vscode</li>
        <li>Banco de dados: Mysql</li>
        <li>Webserver: Apache(default do laravel)</li>
        <li>Linguagem: PHP</li>
        <li>Framework: Laravel e bootstrap</li>
        <li>Ferramentas: PHPCodeSniffer</li>
        <li>API: API pagarme</li>
    </ul>
<h2>Tutorial</h2>
    <ul>
        <li>Faça o clone deste projeto</li>
        <li>Navegue até a pasta do projeto e rode o seguinte comando composer install --no-scripts</li>
        <li>Em seguida copie no arquivo .env coloque o usuário e senha de seu banco de dado MySql</li>
        <li>Crie uma tabela com o nome de marketplace create database marketplace;</li>
        <li>Crie uma no key para o laravel php artisan key:generate</li>
        <li>Em seguida faça as migrations php artisan migrate --seed</li>
        <li>Suba o servidor com php artisan serve</li>
    </ul>

<h2>Rotas</h2>
    <ul>
        <li>Rota para vitrine da loja: http://localhost:8000/</li>
        <li>Rota para o checkout: http://localhost:8000/checkout</li>
        <li>Rota para o carinho de produtos: http://localhost:8000/produto/shoppingCart</li>
        <li>Rota para adicionar um produto: http://localhost:8000/addCart/{id}</li>
        <li>Rota para adicionar um produto: http://localhost:8000/remove/{id}.</li>
    </ul>

<h2>Rodando os testes</h2>
    <ul>
        <li>vendor/bin/phpunit</li>
        <li>Foram escritos testes para Validar as Rotas criadas epara validar as informações no banco</li>
    </ul>
