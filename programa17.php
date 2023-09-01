<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 17</title>
</head>
<body>
    <center>
    <?php
        $ption = "s"; 
        
        switch( $ption){
            case "s": echo"Você escolheu A opção SIM!";
            break;
                case "n": echo"Você escolheu A opção NÂO";
                break;
                     default: echo"Você não escolheu nenhuma OPÇÂO!";
                     break;

        }
    ?>
    </center>
</body>
</html>