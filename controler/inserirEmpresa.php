<?php

    $nome_empresa = $_POST["cxNome"];
    $descricao = $_POST["cxDescricao"];
    $email = $_POST["cxEmail"];
    $fone = $_POST["cxFone"];

if ($nome_empresa != "" && $descricao != "" && $email != "" && $fone != "") {
    include_once '../model/conexao.php';
    include_once '../model/modelEmpresa.php';

    cadastrarEmpresa($conexao, $nome_empresa, $descricao, $fone, $email);

    echo ("Dados Cadastrados com Sucesso");
} 

else {
    echo ("erro de conexão");
}

?>

<br>
<a href="../index.php">Index</a>