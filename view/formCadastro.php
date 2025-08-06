<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Meaudote</title>

  <link rel="stylesheet" href="../public/src/style.css" />
  <script src="https://kit.fontawesome.com/92c05a5491.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div id="logo">
      <h1>meaudote</h1>
    </div>
    <nav id="navbar">
            <a href="?url=home/index"><i class="fa-solid fa-home" ></i></a>
            <a href="?url=home/cadastroForm" title="Login/Logout"><i class="fa-solid fa-user"></i></a>
            <a href="?url=home/cadastroAnimaisForm" title="Cadastrar Animal"><i class="fa-solid fa-circle-plus"></i></a>
    </nav>
  </header>

  <main>
    <form action="?url=usuario/criar " method="post">
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" placeholder="Fulano da Silva / ONG da Silva" />

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="email@exemplo.com" />

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" placeholder="Digite sua senha" />

      <div class="selects">
        <label for="pessoa">
          <input type="radio" id="pessoa" name="tipo" value="pessoa" />
          Pessoa
        </label>
        <label for="organizacao">
          <input type="radio" id="organizacao" name="tipo" value="organizacao" />
          Organização
        </label>
      </div>

      <button type="submit">Cadastrar</button>
      <a href="?url=home/loginForm">Já possuo uma conta</a>
    </form>
  </main>
</body>
</html>