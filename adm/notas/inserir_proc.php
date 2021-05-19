<?php
require_once '../verificar.php';
require_once '../bd.php';
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_DEFAULT);
$data = filter_input(INPUT_POST, 'data_realizacao', FILTER_DEFAULT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_DEFAULT);


$sql = "INSERT INTO atividades (titulo,data_realizacao,descricao) VALUE (?,?,?)";
$rs = mysqli_prepare($banco, $sql);
mysqli_stmt_bind_param($rs, 'sss', $titulo, $data, $descricao);

mysqli_stmt_execute($rs);

//echo mysqli_stmt_affected_rows($rs);
//exit();

header('location:index.php');
