<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 04</title>
</head>
<body>
    <?php

      //Neste exemplo de codigo contem interpolação de variaveis

      $time = "Flamengo";
      $ano = 1981;

      $frase01 = " O $time é o melhor clube de futebol do mundo";
      $frase02 = "O $time foi campeão do mundo em $ano";

    echo "<h1>$frase01<?h2>";
    echo "<br>";
    echo "<h1>$frase02</h1>";

    ?>
</body>
</html>