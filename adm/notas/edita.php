<?php
require_once '../verificar.php';
require_once '../bd.php';
$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$id = intval($id);
$sql = "SELECT * FROM atividades WHERE id = $id";
$resultado = mysqli_query($banco, $sql);
$atividade = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar atividades</title>
    <link rel="stylesheet" href="../../css/adm.css">
</head>

<body>
    <h1>Editar atividades</h1>
    <hr>
    <form action="editar_proc.php" method="post">


        <label for="titulo">Título</label><br>
        <input value="<?= $atividade['titulo'] ?>" type="text" id="titulo" name="titulo"><br>

        <label for="data_realizacao">Data de realização</label><br>
        <input value="<?= $atividade['data_realizacao'] ?>" type="date" id="data_realizacao" name="data_realizacao"><br>


        <label for="descricao">Descrição</label><br>
        <textarea name="descricao" id="descricao" cols="30" rows="10"><?= $atividade['descricao'] ?></textarea><br>

        <input type="hidden" name="id" value="<?= $atividade['id'] ?>">

        <button type="submit">Enviar</button>
    </form>
</body>

</html>