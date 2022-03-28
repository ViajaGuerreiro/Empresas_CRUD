<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Empresa</title>
</head>

<body>
<?php
    session_start();
    if(isset($_SESSION['sucessoAlt'])) {
?>
        <script>alert("Dados alterados com Sucesso")</script>
<?php
    session_destroy();
    }

    if(isset($_SESSION['sucessoDel'])) {
?>
        <script>alert("Empresa deletada com Sucesso")</script>
<?php
    session_destroy();
    }
?>
    <nav>
        <a href="../index.php">Index</a>
    </nav>
    <form action="../controler/buscarEmpresa.php" method="GET">

        <span>Digite o nome da empresa:</span>
        <input required type="text" size="50" name="cxNomeE">
        <button type="submit">Pesquisar</button>

    </form>
    <br>
    <form action="../controler/buscarTodasEmpresas.php" method="post">
        <button>Pesquisar todas</button>
    </form>
</body>

</html>