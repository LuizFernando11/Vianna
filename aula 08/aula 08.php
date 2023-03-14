<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
</head>
<body>

    <form method="POST" action="processar.php?<?= isset($_GET['id'])? 'id='.$_GET['id']:''?>">
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="form-group">
            <label for="periodo">Periodo: </label>
            <input type="text" name="periodo" id="periodo">
        </div>
        <input type="hidden" name="opt" value="<?= isset($_GET['id'])?'alterar':'cadastrar' ?>">
        <input type="submit" value="Enviar">
    </form>


    
</body>
</html>