<?php
require_once 'usuario/verificar.php';
require_once 'adm/bd.php';
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_DEFAULT);
$descricao = filter_input(INPUT_POST, 'conteudo', FILTER_DEFAULT);
$user = $_SESSION['usuario'];

$sql = "INSERT INTO notas (titulo,conteudo,FK_user) VALUE (?,?,?)";
$rs = mysqli_prepare($banco, $sql);
mysqli_stmt_bind_param($rs, 'ssi', $titulo, $descricao, $user);

mysqli_stmt_execute($rs);

//echo mysqli_stmt_affected_rows($rs);
//exit();

header('location:index.php');
