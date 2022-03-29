<?php
include_once '../model/conexao.php';
include_once '../model/modelEmpresa.php';

$id_empresa = $_GET['id'];

if ($id_empresa != null) {
    deletarEmpresa($conexao, $id_empresa);
    echo "
        <script>
            alert('Empresa deletada com Sucesso');

            window.location.href = '../view/buscarNomeEmpresa.php';
        </script>
    ";
}
else {
    header("location: ../view/buscarNomeEmpresa.php");
}

?>