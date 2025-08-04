<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meaudote</title>

    <link rel="stylesheet" href="../public/src/style.css">
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

    <section>
        <h1>Disponíveis para adoção (3)</h1>
    </section>

    <main>

        <div class="bichos">
            <div class="fotoBicho">
                <img src="https://place.dog/250/250" alt="Cachorro para adoção">
            </div>
            <div class="dadosBicho">
                <div class="informacoesBichos">
                    <h3>Rex</h3>
                    <h4>SRD - Adulto</h4>
                </div>
                <a href="?url=home/perfilAnimais"><button>Adotar</button></a>
            </div>
        </div>

        <div class="bichos">
            <div class="fotoBicho">
                <img src="https://place.dog/220/220" alt="Cachorro para adoção">
            </div>
            <div class="dadosBicho">
                <div class="informacoesBichos">
                    <h3>Luna</h3>
                    <h4>Beagle - Filhote</h4>
                </div>
                <a href="?url=home/perfilAnimais"><button>Adotar</button></a>
            </div>
        </div>
        <div class="bichos">
            <div class="fotoBicho">
                <img src="https://place.dog/230/230" alt="Cachorro para adoção">
            </div>
            <div class="dadosBicho">
                <div class="informacoesBichos">
                    <h3>Thor</h3>
                    <h4>Pitbull - Jovem</h4>
                </div>
                <a href="?url=home/perfilAnimais"><button>Adotar</button></a>
            </div>
        </div>
    </main>
</body>
</html>
