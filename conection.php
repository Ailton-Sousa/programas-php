<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            
        }
    </style>
</head>
<body>

        <?php

           $servidor = '127.0.0.1';
           $usuario = "root";
           $senha = '';
           $db_usu = "cadrato";
        
            $mysqli = new mysqli($servidor, $usuario,$senha,$db_usu);
            
            if ($mysqli->connect_error) {
                die("Conexão falhou: " . $mysqli->connect_error);
            } 
            else{
                echo "Conexão realizada com sucesso!";
            }


            $resultado = $mysqli ->query("select * from pessoas");
            $linhas = $resultado ->num_rows;
           
            for($i=0; $i < $linhas; $i++){

            $registro = $resultado ->fetch_array();
             
            $id = $registro["id"];
            $nome = $registro["nome"];
            $nasc = $registro["nasc"];
            $sexo = $registro["sexo"];
            $peso = $registro["peso"];
            $altura = $registro["altura"];
            $nacionalidade = $registro["nacionalidade"];

            }

        ?>

      <?php
      echo "<table>";

          echo"<tr>";
            echo "<th> Id </th>";
            echo "<th>Nome</th>";
            echo "<th>Nascimento</th>";
            echo "<th>Sexo</th>";
            echo "<th>Peso</th>";
            echo "<th>Altura</th>";
            echo "<th>Nacionalidade</th>";
          echo "</tr>";

          echo"<tr>";
            echo "<td> $id </td>";
            echo "<td> $nome </td>";
            echo "<td> $nasc </td>";
            echo "<td> $sexo </td>";
            echo "<td> $peso  </td>";
            echo "<td>  $altura </td>";
            echo "<td> $nacionalidade </td>";
          echo "</tr>";

    echo "</table>"      

          ?>

      
    
</body>
</html>