<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meaudote</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/92c05a5491.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div id="logo">
            <h1>meaudote</h1>
        </div>
        <nav id="navbar">
            <a href="home.php" title="Login/Logout"><i class="fa-solid fa-home"></i></a>
            <a href="formCadastro.php" title="Login/Logout"><i class="fa-solid fa-user"></i></a>
            <a href="formCadastroAnimais.php" title="Cadastrar"><i class="fa-solid fa-circle-plus"></i></a>
        </nav>
    </header>

    <main>
        <form action="#" method="post">
            <label for="email">Email</label>
            <input type="email" placeholder="Fulano.Silva@gmail.com">
            <label for="senha">Senha</label>
            <input type="password" placeholder="Digite sua senha">
            <button>Login</button>
            <a href="formCadastro.php">Não uma tenho conta</a>
        </form>
       
    </main>
</body>
</html>
