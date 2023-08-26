<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 15 PHP</title>
</head>
<body>
    <center>
        <h1>Calculadora simple</h1>   

        <?php 

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $numA = $_POST["num01"];
            $numB = $_POST["num02"];
            $soma = $numA + $numB;
            
            echo "<p> A soma é: $soma </p>";
        }

        ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Numero 01:
            <input name="num01" type="text" id="num01" size="5"> <br> + <br>
            Numero 02:
            <input name="num02" type="text" id="num02" size="5"> <br> <br>
            <input type="submit"   id="calcular" value="calcular"> 
        </form>
            
    </center>

    
    
</body>
</html>