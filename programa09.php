<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 09</title>
</head>
<body>
    <?php
      // Escopo de variavel
      // Codigo  correto pois define uma variavel global.

      $num = 5000;
      
      function teste_escopo02(){
       
        global $num;
        $num += 5;
        echo $num;
      }
      
      echo $num."<br>";
      teste_escopo02();

    ?>
</body>
</html>