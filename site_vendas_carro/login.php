<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include('head.php'); ?>
</head>
<body>
    <main class="sombra">
        <form action="" method="post">
            <h2>Login</h2>
            <div>
                <label for="user">Usuário:</label>
                <input type="text" name="user" id="user" required>
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <div class="align-right">
                <a href="redef.php" class="btn">Esqueceu a senha?</a>
                <input class="btn" type="submit" value="Entrar">
            </div>
        </form>
    </main>
</body>
</html>