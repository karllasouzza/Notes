<?php
require_once '../verificar.php';
require_once '../bd.php';
$sql = "SELECT id,login FROM adm";
$resultado = mysqli_query($banco, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar - Usuários</title>
    <link rel="stylesheet" href="../../css/adm.css">
</head>

<body>
    <h1>Listar Usuários</h1>

    <a class="botao" href="inserir.php">Inserir Usuários</a>
    <hr>
    <table>
        <tr>
            <td>ID</td>
            <td>Login</td>
            <td>Opções</td>
        </tr>
        <?php
        while ($usuario = mysqli_fetch_assoc($resultado)) :
        ?>
            <tr>
                <td><?= $usuario['id'] ?> </td>
                <td><?= $usuario['login'] ?></td>
                <td>
                    <a href="edita.php?id=<?= $usuario['id'] ?>">Editar</a> |
                    <a href="excluir.php?id=<?= $usuario['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>