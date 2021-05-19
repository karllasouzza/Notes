<?php
require_once 'usuario/verificar.php';
require_once 'adm/bd.php';

$id = intval(filter_input(INPUT_POST, 'id', FILTER_DEFAULT));
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_DEFAULT);
$conteudo = filter_input(INPUT_POST, 'conteudo', FILTER_DEFAULT);


$sql = "UPDATE notas SET titulo = ?,conteudo = ? WHERE id = ?";
$rs = mysqli_prepare($banco, $sql);
mysqli_stmt_bind_param($rs, 'ssi', $titulo, $conteudo, $id);

mysqli_stmt_execute($rs);

header('location:index.php');
