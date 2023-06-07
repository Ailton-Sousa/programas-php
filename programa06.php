<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 06</title>
</head>
<body>
    <?php

    //Ultilização de aspas dupla
    //com aspas dupla e  posivel realizar uma interpolação

    $palavra = "teste";
    $frase = "Isso é um $palavra."; // Interpolação aqui
    echo $frase;
    ?>
</body>
</html>