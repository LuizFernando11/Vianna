<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>

<h1>Exercicio do Elefante</h1>

<?php 
    for ($i = 1; $i < 100 ; $i++): 
?>

<p> <?=$i?> elefante incomoda muita gente, <br>
    <?=$i+1?> elefantes incomodam <?php for ($j = 0; $j < $i; $j++) echo ", incomodam ";  $i++; ?>muito mais<br>
</p>

<?php
endfor;
?>

<?php
for ($i=0; $i < 5; $i++) { 
    echo "<br>";
}
?>

</body>
</html>