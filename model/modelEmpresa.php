<?php

function cadastrarEmpresa($conexao, $nome_empresa, $descricao, $fone, $email)
{

    $sql = "insert into empresa(nome_empresa, descricao, telefone, email) values ('{$nome_empresa}', '{$descricao}', '{$fone}', '{$email}')";

    mysqli_query($conexao, $sql);
}

function buscarEmpresaNome($conexao, $nome_empresa)
{
    $sql = "select * from empresa where nome_empresa like '%$nome_empresa%'";

    $executar = mysqli_query($conexao, $sql);

    if($executar != null ) {
        return $executar;
    } else {
        return null;
    }
}

function buscarTodasEmpresas($conexao)
{
    $sql = "select * from empresa ";

    $executar = mysqli_query($conexao, $sql);

    if($executar != null ) {
        return $executar;
    } else {
        return null;
    }
}

function alterarDadosEmpresa($conexao, $nome_empresa, $descricao, $fone, $email, $id_empresa) {

    $sql = "update empresa set nome_empresa = '{$nome_empresa}', descricao = '{$descricao}', telefone = '{$fone}', email = '{$email}' where cod_empresa = {$id_empresa}";

    mysqli_query($conexao, $sql);
}

function deletarEmpresa($conexao, $id_empresa) {
    $sql = "delete from empresa where cod_empresa = {$id_empresa}";

    mysqli_query($conexao, $sql);
}
