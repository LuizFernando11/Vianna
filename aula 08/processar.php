<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Nome: <?= $_POST['nome'] ?></p>
<p>Periodo: 
    <?= 
    isset($_POST['periodo'])? 
    $_POST['periodo'] :
     "Sem periodo"; 
    ?>
</p>

<?php if(isset($_GET['id'])): ?>

<p>O item <?= $_GET['id'] ?> foi alterado </p>

<?php

else: ?>

<p>O item foi cadastrado </p>

<?php endif; ?>
    
</body>
</html>