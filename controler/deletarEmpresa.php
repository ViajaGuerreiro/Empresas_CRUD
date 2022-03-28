<?php

include_once '../model/conexao.php';
include_once '../model/modelEmpresa.php';

$id_empresa = $_GET['id'];

if ($id_empresa != null) {
    deletarEmpresa($conexao, $id_empresa);
    echo("Empresa Deletada com Sucesso");
}
else {
    echo ("Erro de Conexão");
}

?>

<a href="../index.php">Buscar Empresa</a>