<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método e Atributos</title>
</head>

<body>
    <?php 
        require './Usuario.php';
        $usuario = new Usuario();
        $msg = $usuario->cadastrar("Gabriel Polessi", 20, "teste@gmail.com");
        echo $msg;
    ?>
</body>

</html>