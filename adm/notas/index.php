<?php
require_once '../verificar.php';
require_once '../bd.php';
$sql = "SELECT * FROM notas";
$resultado = mysqli_query($banco, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes | Notas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/adm.css">

</head>

<body>
    <h1>Listar atividades</h1>

    <a class="botao" href="inserir.php">Inserir atividade</a>
    <hr>
    <table class="table table-striped">
        <thead>

            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Titulo</th>
                <th scope="col">Conteudo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($atividade = mysqli_fetch_assoc($resultado)) :
            ?>
                <tr>
                    <th scope="row"><?= $atividade['id'] ?> </th>
                    <td><?= $atividade['usuario'] ?></td>
                    <td><?= $atividade['titulo'] ?></td>
                    <td><?= $atividade['conteudo'] ?></td>
                </tr>
            <?php endwhile; ?>

        </tbody>
    </table>
</body>

</html>