<?php

include_once '../model/conexao.php';
include_once '../model/modelEmpresa.php';

$dados = buscarTodasEmpresas($conexao);

while ($linha = mysqli_fetch_array($dados)) {
?>
    <br>
    <span>Nome:</span>
    <input readonly type="text" size="50" value="<?= $linha['nome_empresa'] ?>">
    <br>
    <span>Descrição</span>
    <input readonly type="text" size="200" value="<?= $linha['descricao'] ?>">
    <br>
    <span>Telefone</span>
    <input readonly type="text" size="11" value="<?= $linha['telefone'] ?>">
    <br>
    <span>Email:</span>
    <input readonly type="text" size="50" value="<?= $linha['email'] ?>">
    <br>

<?php
}
?>

<a href="../view/buscarNomeEmpresa.php">Voltar Busca</a>