<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe abstrata</title>
</head>
<body>
    <?php 
        require './Cheque.php';
        require './ChequeComum.php';
        require './ChequeEspecial.php';

        // A classe abstrata não pode ser instanciada
        // $cheque = new Cheque(207.27, "Comum");
        // $msg = $cheque->verValor();
        // echo $msg;

        $chequeComum = new ChequeComum(307.27, "Comum");
        $msgChequeComum = $chequeComum->calcularJuro();

        echo $msgChequeComum;

        $chequeEspecial = new ChequeEspecial(407.47, "Especial");
        $msgChequeEspecial = $chequeEspecial->calcularJuro();

        echo $msgChequeEspecial;
    ?>
</body>
</html>