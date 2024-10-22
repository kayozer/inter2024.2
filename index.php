<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Gabriela Ribeiro - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Bem-vindo ao Studio Gabriela Ribeiro</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="sobrancelha.php">Sobrancelhas</a></li>
                <li><a href="penteado.php">Penteados</a></li>
                <li><a href="cilios.php">Cílios</a></li>
                <li><a href="maquiagem.php">Maquiagens</a></li>
                <li><a href="peeling.php">Peeling de Diamante</a></li>
                <li><a href="spa_lips.php">Spa de Lábios</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="descricao">
            <p>O Studio Gabriela Ribeiro é especializado em realçar a beleza natural de seus clientes por meio de serviços como design de sobrancelhas, penteados, extensão de cílios, maquiagens, e tratamentos faciais. Navegue pelos nossos serviços e descubra como podemos transformar o seu visual!</p>
        </section>

        <section class="imagens">
            <img src="img/cliente1.jpg" alt="fotosCliente" class="foto-1">
            <img src="img/cliente2.jpg" alt="fotosCliente" class="foto-1">
        </section>

        <div class="botoes">
            <button class="botao" onclick="location.href='sobrancelha.php'">Sobrancelhas</button>
            <button class="botao" onclick="location.href='penteado.php'">Penteados</button>
        </div>

        <div class="botoes">
            <button class="botao" onclick="location.href='cilios.php'">Cílios</button>
            <button class="botao" onclick="location.href='maquiagem.php'">Maquiagens</button>
        </div>

        <div class="botoes">
            <button class="botao" onclick="location.href='peeling.php'">Peeling de Diamante</button>
            <button class="botao" onclick="location.href='spa_lips.php'">Spa de Lábios</button>
        </div>
    </main>

    <footer>
        <p>&copy;  2024  Gabriela Ribeiro Studio de Beleza - Todos os direitos reservados</p>
    </footer>
</body>
</html>