<?php
    $nome_empresa = $_POST["cxNome"];
    $descricao = $_POST["cxDescricao"];
    $email = $_POST["cxEmail"];
    $fone = $_POST["cxFone"];

if ($nome_empresa != "" && $descricao != "" && $email != "" && $fone != "") {
    include_once '../model/conexao.php';
    include_once '../model/modelEmpresa.php';

    cadastrarEmpresa($conexao, $nome_empresa, $descricao, $fone, $email);

    echo "
        <script>
            alert('Empresa cadastrada com Sucesso');

            window.location.href = '../index.php';
        </script>
    ";
} 

else {
    header("location: ../index.php");
}

?>