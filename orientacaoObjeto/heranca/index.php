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
        require './ClientePessoaFisica.php';
        require './ClientePessoaJuridica.php';

        $cliente = new Cliente();
        $cliente->logradouro = "Avenida Teste - A";
        $cliente->bairro = "Bairro Teste - A";
        $cliente->numero = "01";

        $msg = $cliente->verEndereco();

        echo $msg;
        echo "<hr>";
        
        $clientePf = new ClientePessoaFisica();
        $clientePf->nome = "Nome Teste";
        $clientePf->cpf = 11111111111;

        $msgPf = $clientePf->verInformacaoUsuario();

        echo $msgPf;
        echo "<hr>";

        $clientePj = new ClientePessoaJuridica();
        $clientePj->nomeFantasia = "Nome Empresa Teste";
        $clientePj->cnpj = 00000000000100;

        $msgPj = $clientePj->verInformacaoEmpresa();

        echo $msgPj;
        echo "<hr>";

    ?>
</body>
</html>