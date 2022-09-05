<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('head.php'); ?>
    <title>Cadastro</title>
</head>
<body>
    <?php include('menu.php'); ?>
    <main class="sombra">
        <form action="" method="post">
            <h2>Cadastre-se</h2>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
            <div>
                <label for="user">Usuário:</label>
                <input type="text" name="user" id="user" required>
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <div class="align-right">
                <a href="login.php" class="btn">Já possui cadastro?</a>
                <input class="btn" type="submit" value="Cadastrar">
            </div>
        </form>
    </main>
</body>
</html>