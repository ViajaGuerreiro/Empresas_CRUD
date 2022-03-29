<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Empresa</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <a href="../index.php">Index</a>
    </nav>

    <main>
        <div id="main-form">
            <form action="../controler/buscarEmpresa.php" method="GET">

                <h1>Digite o nome da empresa</h1>
                <input required type="text" name="cxNomeE">

                <div id="main-form-botoes">
                    <button class="btn-excluir" type="submit">Pesquisar</button>
            </form>
            <form action="../controler/buscarTodasEmpresas.php" method="post">
                    <button class="btn-alterar" type="submit">Pesquisar todas</button>

                </div>
            </form>
        </div>
    </main>

</body>

</html>