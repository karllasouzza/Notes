<?php
require_once 'usuario/verificar.php';
require_once 'adm/bd.php';

$id = intval(filter_input(INPUT_GET, 'id', FILTER_DEFAULT));



$sql = "DELETE FROM notas WHERE id = ?";
$rs = mysqli_prepare($banco, $sql);
mysqli_stmt_bind_param($rs, 'i', $id);

mysqli_stmt_execute($rs);

header('location:index.php');
