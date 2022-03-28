<?php
session_start();
include_once '../model/conexao.php';
include_once '../model/modelEmpresa.php';

$id_empresa = $_GET['id'];

if ($id_empresa != null) {
    deletarEmpresa($conexao, $id_empresa);
    $_SESSION['sucessoDel'] = true;
    header("location: ../view/buscarNomeEmpresa.php");
}
else {
    header("location: ../view/buscarNomeEmpresa.php");
}

?>

<a href="../index.php">Buscar Empresa</a>