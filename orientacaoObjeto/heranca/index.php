<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heranças</title>
</head>
<body>
    <?php 
        require './Cliente.php';
        $cliente = new Cliente();
        $cliente->logradouro = "Avenida Teste - A";
        $cliente->bairro = "Bairro Teste - A";
        $cliente->numero = "01";

        $msg = $cliente->verEndereco();

        echo $msg;
        echo "<hr>";

        require './ClientePessoaFisica.php';
        $clientePf = new ClientePessoaFisica();
        $clientePf->logradouro = "Avenida Teste - B";
        $clientePf->bairro = "Bairro Teste - B";
        $clientePf->numero = "02";
        $clientePf->nome = "Nome Teste";
        $clientePf->cpf = 11111111111;

        $msgPf = $clientePf->verInformacaoUsuario();

        echo $msgPf;
        echo "<hr>";

        require './ClientePessoaJuridica.php';
        $clientePj = new ClientePessoaJuridica();
        $clientePj->nomeFantasia = "Nome Empresa Teste";
        $clientePj->cnpj = 00000000000100;

        $msgPj = $clientePj->verInformacaoEmpresa();

        echo $msgPj;
        echo "<hr>";

    ?>
</body>
</html>