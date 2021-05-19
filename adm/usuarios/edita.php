<?php
require_once '../verificar.php';
require_once '../bd.php';
$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$id = intval($id);
$sql = "SELECT * FROM adm WHERE id = $id";
$resultado = mysqli_query($banco, $sql);
$usuario = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuários</title>
    <link rel="stylesheet" href="../../css/adm.css">
</head>

<body>
    <h1>Editar Usuários</h1>
    <hr>
    <form action="editar_proc.php" method="post">


        <label for="login">Login</label><br>
        <input value="<?= $usuario['login'] ?>" type="text" id="login" name="login"><br>

        <label for="senha">Senha</label><br>
        <input type="password" id="senha" name="senha"><br>

        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

        <button type="submit">Enviar</button>
    </form>
</body>

</html>