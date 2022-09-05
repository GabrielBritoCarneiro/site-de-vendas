<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('head.php'); ?>
    <title>Cadastro de produtos</title>
</head>
<body>
    <?php include('menu.php'); ?>
    <main class="sombra">
        <form action="" method="post">
            <h2>Cadastrar produtos</h2>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="valor">Valor:</label>
                <input type="number" name="valor" id="valor" required>
            </div>
            <div>
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" required>
            </div>
            <div>
                <label for="cod">Código:</label>
                <input type="number" name="cod" id="cod" required>
            </div>
            <div class="align-right">
                <a href="" class="btn">Voltar</a>
                <input class="btn" type="submit" value="Cadastrar">
            </div>
        </form>
    </main>
</body>
</html>