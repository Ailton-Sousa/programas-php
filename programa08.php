<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 08</title>
</head>
<body>
    <?php
    //Escopo de variaveis
    // Estar incorreto pois a variavel não foi definido como global.
      $num = 5000;
       function testar_escopo(){

        $num +=5;
        echo $num;
       }

       echo $num."<br>";
       testar_escopo();
    ?>
</body>
</html>