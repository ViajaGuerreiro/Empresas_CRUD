<?php

include_once '../model/conexao.php';
include_once '../model/modelEmpresa.php';

$nome_empresa = $_GET["cxNomeE"];

$dados = buscarEmpresaNome($conexao, $nome_empresa);

while ($linha = mysqli_fetch_array($dados)) {
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
        <main id="main-busca">
            <div id="main-busca-form">
                <form action="alterarDadosEmpresa.php" method="post">
                    <label for="id_empresa">ID:</label>
                    <input readonly type="text" name="cxCod" id="id_empresa" value="<?= $linha['cod_empresa'] ?>">
                    <br>

                    <label>Nome:</label>
                    <input type="text" name="cxNome" value="<?= $linha['nome_empresa'] ?>">
                    <br>

                    <label>Descrição</label>
                    <input maxlength="200" type="text" name="cxDescricao" value="<?= $linha['descricao'] ?>">
                    <br>

                    <label>Telefone</label>
                    <input maxlength="11" type="text" name="cxFone" value="<?= $linha['telefone'] ?>">
                    <br>

                    <label>Email:</label>
                    <input type="text" name="cxEmail"value="<?= $linha['email'] ?>">
                    <br>

                    <button type="submit">Alterar Dados</button>
                </form>
            </div>
            <a href="deletarEmpresa.php?id= <?= $linha['cod_empresa'] ?>">Excluir</a>
        </main>
    </body>

    </html>

<?php
}
?>

<a href="../view/buscarNomeEmpresa.php">Voltar Busca</a>