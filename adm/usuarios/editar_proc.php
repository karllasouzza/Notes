<?php
require_once '../verificar.php';
require_once '../bd.php';

$id = intval(filter_input(INPUT_POST, 'id', FILTER_DEFAULT));
$login = filter_input(INPUT_POST, 'login', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
$senha = password_hash($senha, PASSWORD_DEFAULT);


$sql = "UPDATE adm SET login = ?, senha = ? WHERE id = ?";
$rs = mysqli_prepare($banco, $sql);
mysqli_stmt_bind_param($rs, 'ssi', $login, $senha, $id);

mysqli_stmt_execute($rs);

header('location:index.php');
