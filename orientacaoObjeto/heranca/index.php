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
        $cliente->logradouro = "Avenida Teste";
        $cliente->bairro = "Bairro Teste";
        $cliente->numero = "01";

        $msg = $cliente->verEndereco();

        echo $msg;
        echo "<hr>";
    ?>
</body>
</html>