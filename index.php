<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METEORA</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <nav class="menu">
            <img src="images/logo.png" alt="METEORA" class="logo">
            <a href="home.html" class="link-menu ativo">Home</a>
            <a href="lojas.html" class="link-menu">Lojas</a>
            <a href="novidades.html" class="link-menu">Novidades</a>
            <a href="promocoes.html" class="link-menu">Promoções</a>
        </nav>
        <form class="pesquisa">
            <input type="text" class="campo-texto" placeholder="Digite o produto" maxlength="50" minlength="5" required>
            <button class="botao">Buscar</button>
        </form>
    </header>
    <div class="banner">
        <img src="images/banner.png" alt="banner meteora" class="imagem-banner">
    </div>
    <div class="categorias">
        <h2 class="titulo">Busque por categoria:</h2>
        <nav class="menu-categorias">
            <a href="#" class="item-categoria">
                <img src="images/categoria-camisetas.png" class="foto-categoria" alt="categoria de camisetas">
                <p class="texto-categoria">Camisetas</p>
            </a>
            <a href="#" class="item-categoria">
                <img src="images/categoria-bolsas.png" class="foto-categoria" alt="categoria de bolsas">
                <p class="texto-categoria">Bolsas</p>
            </a>
            <a href="#" class="item-categoria">
                <img src="images/categoria-calcados.png" class="foto-categoria" alt="categoria de calçados">
                <p class="texto-categoria">Calçados</p>
            </a>
            <a href="#" class="item-categoria">
                <img src="images/categoria-calcas.png" class="foto-categoria" alt="categoria de calças">
                <p class="texto-categoria">Calças</p>
            </a>
            <a href="#" class="item-categoria">
                <img src="images/categoria-casacos.png" class="foto-categoria" alt="categoria de casacos">
                <p class="texto-categoria">Casacos</p>
            </a>
            <a href="#" class="item-categoria">
                <img src="images/categoria-oculos.png" class="foto-categoria" alt="categoria de óculos">
                <p class="texto-categoria">óculos</p>
            </a>
        </nav>
    </div>

    <div class="produtos">
        <h2 class="titulo">Produtos que estão bombando!</h2>
        <div class="lista-produtos">
            <div class="item-produto">
                <img src="images/camiseta.png" class="foto-produto">
                <h3 class="titulo-produto">Camiseta Conforto</h3>
                <p class="descricao-produto">Multicores e tamanhos. Tecido de algodão 100%, fresquinho para o verão. Modelagem unissex.</p>
                <h3 class="preco-produto">R$ 70,00</h3>
                <a href="#" class="botao-produto">Ver mais</a>
            </div>
            <div class="item-produto">
                <img src="images/calca.png" class="foto-produto">
                <h3 class="titulo-produto">Calça Alfaiataria</h3>
                <p class="descricao-produto">Modelo Wide Leg alfaiataria em linho. Uma peça pra vida toda!</p>
                <h3 class="preco-produto">R$ 180,00</h3>
                <a href="#" class="botao-produto">Ver mais</a>
            </div>
            <div class="item-produto">
                <img src="images/tenis.png" class="foto-produto">
                <h3 class="titulo-produto">Tênis Chunky</h3>
                <p class="descricao-produto">Snicker casual com solado mais alto e modelagem robusta. Modelo unissex.</p>
                <h3 class="preco-produto">R$ 250,00</h3>
                <a href="#" class="botao-produto">Ver mais</a>
            </div>
            <div class="item-produto">
                <img src="images/jaqueta.png" class="foto-produto">
                <h3 class="titulo-produto">Jaqueta Jeans</h3>
                <p class="descricao-produto">Modelo unissex oversized com gola de camurça. Atemporal e autêntica!</p>
                <h3 class="preco-produto">R$ 150,00</h3>
                <a href="#" class="botao-produto">Ver mais</a>
            </div>
            <div class="item-produto">
                <img src="images/oculos.png" class="foto-produto">
                <h3 class="titulo-produto">Óculos Redondo</h3>
                <p class="descricao-produto">Armação metálica em grafite com lentes arredondadas. Sem erro!</p>
                <h3 class="preco-produto">R$ 120,00</h3>
                <a href="#" class="botao-produto">Ver mais</a>
            </div>
            <div class="item-produto">
                <img src="images/bolsa.png" class="foto-produto">
                <h3 class="titulo-produto">Bolsa coringa</h3>
                <p class="descricao-produto">Bolsa camel em couro sintético de alta duração. Ideal para acompanhar você por uma vida!</p>
                <h3 class="preco-produto">R$ 120,00</h3>
                <a href="#" class="botao-produto">Ver mais</a>
            </div>
        </div>
    </div>

    <div class="facilidades">
        <h2 class="titulo-facilidades">Conheça todas as nossas facilidades</h2>
        <div class="icones">
            <div class="conjunto-icone">
                <img src="images/icone-pix.png" class="icone">
                <div class="informacoes-icone">
                    <h4 class="titulo-icone">PAGUE PELO PIX</h4>
                    <p class="texto-icone">Ganhe 5% OFF em pagamentos via PIX</p>
                </div>
            </div>
            <div class="conjunto-icone">
                <img src="images/icone-troca.png" class="icone">
                <div class="informacoes-icone">
                    <h4 class="titulo-icone">TROCA GRÁTIS</h4>
                    <p class="texto-icone">Fique livre para trocar em até 30 dias.</p>
                </div>
            </div>
            <div class="conjunto-icone">
                <img src="images/icone-sustentabilidade.png" class="icone">
                <div class="informacoes-icone">
                    <h4 class="titulo-icone">SUSTENTABILIDADE</h4>
                    <p class="texto-icone">Moda responsável, que respeita o meio ambiente.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="promocoes">
        <h3 class="titulo-promocoes">Quer receber nossas novidades, promoções exclusivas e 10% OFF na primeira compra? Cadastre-se!</h3>
        <form class="formulario-promocoes">
            <input type="text" class="campo-promocoes" placeholder="Digite seu email">
            <button type="button" class="botao-promocoes">Enviar</button>
        </form>
    </div>

    <footer class="rodape">
        <p class="texto-rodape">2025 &copy; Desenvolvido por <strong>[Guto Xavier]</strong> | Projeto fictício sem fins comerciais.</p>
    </footer>

    <script src="app.js"></script>
</body>
</html>