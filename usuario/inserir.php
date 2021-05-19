<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes | Criar conta</title>
    <link rel="stylesheet" href="../css/adm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark px-2  align-items-center">
            <a href="index.php" class="navbar-brand d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-range-fill me-1" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 7V5H0v5h5a1 1 0 1 1 0 2H0v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9h-6a1 1 0 1 1 0-2h6z" />
                </svg>NOTES</a>
        </nav>
    </header>


    <form action="inserir_proc.php" method="post">
        <div class="mb-3">
            <label for="TITLE" class="form-label">Login</label>
            <input type="text" class="form-control" name="Login" id="TITLE">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="Senha" id="inputPassword">

        </div>
        <button class="btn btn-primary" type="submit">Adicionar ADM</button>
    </form>



</body>

</html>