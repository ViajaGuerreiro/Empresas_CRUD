<?php

include_once '../model/conexao.php';
include_once '../model/modelEmpresa.php';

$nome_empresa = $_GET["cxNomeE"];

$dados = buscarEmpresaNome($conexao, $nome_empresa);

$linha = mysqli_fetch_assoc($dados);

if ($linha['cod_empresa'] == null) {
    
    echo "
        <script>
            alert('Empresa não encontrada')

            window.location.href = '../view/buscarNomeEmpresa.php'
        </script>
    ";
}

?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Empresas</title>
        <link rel="stylesheet" href="../view/css/style.css">
    </head>

    <body>
        <main>
            <div id="main-form" class="main-form">
                <h1>Dados da Empresa</h1>
                <form action="alterarDadosEmpresa.php" method="post">
                    <input readonly type="text" name="cxCod" id="id_empresa" value="<?= $linha['cod_empresa'] ?>">
                    <br>

                    <input type="text" name="cxNome" value="<?= $linha['nome_empresa'] ?>">
                    <br>

                    <input maxlength="200" type="text" name="cxDescricao" value="<?= $linha['descricao'] ?>">
                    <br>

                    <input maxlength="11" type="text" name="cxFone" value="<?= $linha['telefone'] ?>">
                    <br>

                    <input type="text" name="cxEmail"value="<?= $linha['email'] ?>">
                    <br>

                    <div id="main-form-botoes">
                        <button class="btn-alterar" type="submit">Alterar</button>
                </form>
                        <button class="btn-excluir"><a href="deletarEmpresa.php?id= <?= $linha['cod_empresa'] ?>">Excluir</a></button>
                        
                        <button class="btn-voltar"><a href="../view/buscarNomeEmpresa.php">Voltar</a></button>
                    </div>
            </div>
            
        </main>
    </body>

    </html>