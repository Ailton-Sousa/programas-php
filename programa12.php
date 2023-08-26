<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progama 12 PHP</title>
</head>
<body>
    <center>
        <h1>Estrutura controle</h1>
        <?php

        //Comando condicional if
        
        $verdade = true;
        $mentira = false;

        if($verdade)
        { echo"Bloco 01";}
            elseif($mentira)
            {Echo "Bloco 02";}
                else
                {echo "Bloco 03";}
        ?>
    </center>
</body>
</html>