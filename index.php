<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body>
    <nav>
        <a href="view/buscarNomeEmpresa.php">Buscar Empresa</a>
    </nav>

    <main>
        <form action="controler/inserirEmpresa.php" method="post">
            <div id="main-form">
                <h1>Cadastro Empresa</h1>

                <input required type="text" name="cxNome" placeholder="Nome da Empresa">

                <input maxlength="200" required type="text" name="cxDescricao" placeholder="Descrição">

                <input maxlength="11" required type="tel" name="cxFone" placeholder="Telefone">

                <input required type="email" name="cxEmail" placeholder="E-mail">
                
                <button class="btn-cadastrar" type="submit">Cadastrar</button>
            </div>
        </form>

    </main>
</body>

</html>