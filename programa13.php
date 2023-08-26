<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 13 PHP</title>
</head>
<body>

 <center>

    <?php
    // media do aluno
    $nota01 = 1;
    $nota02 = 5;

    $media = ($nota01 + $nota02) / 2;

    if( $media <3){
        $desempenho = "PESSIMO!";
    }
        elseif($media < 5){
            $desempenho = "RUIM!";
        }
                elseif( $media < 7 ){
                    $desempenho = "MEDIO!";
                }
                    elseif( $media < 9){
                        $desempenho = "BOM!";
                    }
                        else
                        $desempenho = "EXELENTE!";
                        echo "O seu desempenho foi $desempenho";
    ?>
     </center>
</body>
</html>