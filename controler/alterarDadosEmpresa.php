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
    echo "
        <script>

            alert('dados alterados com sucesso');

            window.location.href = '../view/buscarNomeEmpresa.php';

        </script>
    
    ";
} 

else {
    header("location: ../view/buscarNomeEmpresa.php");
}

?>

<br>
