<?php
require_once '../verificar.php';

require_once '../bd.php';
$Login = filter_input(INPUT_POST, 'Login', FILTER_DEFAULT);
$Senha = filter_input(INPUT_POST, 'Senha', FILTER_DEFAULT);

$Senha = password_hash($Senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO adm (login,senha) VALUE (?,?)";
$rs = mysqli_prepare($banco, $sql);
mysqli_stmt_bind_param($rs, 'ss', $Login, $Senha);

mysqli_stmt_execute($rs);

//echo mysqli_stmt_affected_rows($rs);
//exit();

header('location:index.php');
