<?php
require_once '../verificar.php';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir atividades</title>
    <link rel="stylesheet" href="../../css/adm.css">
</head>

<body>
    <h1>Inserir atividades</h1>
    <hr>
    <form action="inserir_proc.php" method="post">


        <label for="titulo">Título</label><br>
        <input type="text" id="titulo" name="titulo"><br>

        <label for="data_realizacao">Data de realização</label><br>
        <input type="date" id="data_realizacao" name="data_realizacao"><br>


        <label for="descricao">Descrição</label><br>
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>