<?php
require 'adm/bd.php';

$ID = intval($_GET['ID']);
$sql = "SELECT * FROM notas WHERE ID = $ID";
$resultado = mysqli_query($banco, $sql);
$dado = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes | Editar nota</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastrar.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark px-2  align-items-center">
            <a href="index.php" class="navbar-brand d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-range-fill me-1" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 7V5H0v5h5a1 1 0 1 1 0 2H0v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9h-6a1 1 0 1 1 0-2h6z" />
                </svg>NOTES</a>
            <a href="index.php" class="btn  btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                </svg></a>
        </nav>
    </header>
    <form action="edit_proc.php" method="post">
        <div class="mb-3">
            <label for="TITLE" class="form-label">Titulo</label>
            <input type="text" class="form-control" value="<?= $dado['titulo'] ?>" type="text" name="titulo" ID="TITLE">
        </div>
        <div class="mb-3">
            <label for="CONTENT" class="form-label">Conteudo da nota</label>
            <textarea class="form-control" type="text" name="conteudo" ID="CONTENT" rows="3"><?= $dado['conteudo'] ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?= $dado['id'] ?>">
        <button class="btn btn-primary" type="submit">Editar Nota</button>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>