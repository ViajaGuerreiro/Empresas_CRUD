<?php

    $cod_empresa = $_POST['cxCod'];

    $nome_empresa = $_POST["cxNome"];
    $descricao = $_POST["cxDescricao"];
    $email = $_POST["cxEmail"];
    $fone = $_POST["cxFone"];

if ($nome_empresa != "" && $descricao != "" && $email != "" && $fone != "") {
    include_once '../model/conexao.php';
    include_once '../model/modelEmpresa.php';

    alterarDadosEmpresa($conexao, $nome_empresa, $descricao, $fone, $email, $cod_empresa);

    echo ("Dados Atualizados com Sucesso");
} 

else {
    echo ("erro de conexão");
}

?>

<br>
<a href="../index.php">Index</a>