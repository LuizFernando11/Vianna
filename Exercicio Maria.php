<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <h1>Maria Conta!</h1>

    <?php

        $qtd = 100;

        for ($i=1; $i <= $qtd; $i++): 
    ?>        
        
        <p>Mariana conta <?= $i ?></p>

        <p>Mariana conta <?= $i ?>: 
            <?php
                for ($j=1; $j <= $i; $j++) {                    
                    echo "é  $j, ";    
                }   
                echo "é!</p>";
            ?>
        <p>Ana, viva a Mariana, viva a Mariana</p>

    <?php
        endfor;
    ?>
    

</body>
</html>