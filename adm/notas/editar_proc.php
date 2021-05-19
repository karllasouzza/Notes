<?php
require_once '../verificar.php';
require_once '../bd.php';

$id = intval(filter_input(INPUT_POST, 'id', FILTER_DEFAULT));
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_DEFAULT);
$data = filter_input(INPUT_POST, 'data_realizacao', FILTER_DEFAULT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_DEFAULT);


$sql = "UPDATE atividades SET titulo = ?, data_realizacao = ?,descricao = ? WHERE id = ?";
$rs = mysqli_prepare($banco, $sql);
mysqli_stmt_bind_param($rs, 'sssi', $titulo, $data, $descricao, $id);

mysqli_stmt_execute($rs);

header('location:index.php');
