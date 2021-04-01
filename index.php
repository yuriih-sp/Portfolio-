<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <header class="header">
        <div class="container">
            <a href="index.html" class="grid-4"> <img src="img/bikcraft.svg" alt="bikcraft"></a>
            <nav class="grid-12 header_menu">
                <ul>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a href="produtos.html">Produtos</a></li>
                    <li><a href="portfolio.html">Portfólio</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="introducao">
        <div class="container">
            <h1>Bicicletas feita a mão</h1>
            <blockquote class="quote-externo">
                <p>"Não tenha nada em sua casa
                    que você não considere útil
                    ou acredita ser bonito"
                </p>
                <cite>WILLIAM MORRIS</cite>
            </blockquote>
            <a href="produtos.html" class="btn">Orçamento</a>
        </div>
    </section>

    <section class="produtos container">
        <h2 class="subtitulo">Produtos</h2>
            <ul class="produtos_lista">
                <li class="grid-1-3">
                    <div class="produtos_icone">
                    <img src="img/produtos/passeio.svg" alt="Passeio">
                    </div>
                    <h3>Passeio</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como há necessidade de renovação</p>
                </li>
                <li class="grid-1-3">
                    <div class="produtos_icone">
                    <img src="img/produtos/esporte.svg" alt="Esporte">
                    </div>
                    <h3>Esporte</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como há necessidade de renovação</p>
                </li>
                <li class="grid-1-3">
                    <div class="produtos_icone">
                    <img src="img/produtos/retro.svg" alt="Retro">
                    </div>
                    <h3>Retro</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como há necessidade de renovação</p>
                </li>
            </ul>

            <div class="call">
                <p>clique aqui e veja detalhes dos produtos</p>
                <a href="produtos.html" class="btn btn-preto">Produtos</a>
            </div>

    </section>
    <!-- Fecha Produtos -->

    <section class="portfolio">
        <div class="container">
            <h2 class="subtitulo">Portfólio</h2>
            <ul class="portfolio_lista">
                <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
                <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
                <li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
            </ul>
            <div class="call">
                <p>conheça o nosso portfólio</p>
                <a href="portfolio.html" class="btn">Portfólio</a>
            </div>
        </div>
    </section>

    <section class="qualidade container">
        <div>
            <h2 class="subtitulo">Qualidade</h2>
            <img src="img/bikcraft-qualidade.svg" alt="Bikcraft">
            <ul class="qualidade_lista">
                <li class="grid-1-3">
                    <h3>Durabilidade</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como há
                         necessidade de renovação</p>
                </li>
                <li class="grid-1-3">
                    <h3>Design</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como há
                         necessidade de renovação</p>
                </li>
                <li class="grid-1-3">
                    <h3>Sustentabilidade</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como há
                         necessidade de renovação</p>
                </li>
            </ul>
            <div class="call">
                <p>Conheça mais a nossa história</p>
                <a href="sobre.html" class="btn btn-preto">Sobre</a>
            </div>
        </div>
    </section>

    <section class="quebra">
        <blockquote class="quote-externo container">
            <p>"O verdadeiro segredo esa em ter um genuíno 
                interesse por todos os detalhes do cotidiano"
            </p>
            <cite>WILLIAM MORRIS</cite>
        </blockquote>
    </section>

    <!-- Footer -->

    <footer>
            <div class="footer">
                <div class="container">
                    <div class="grid-8 footer_historia">
                        <h3>Nossa Historia</h3>
                        <p>O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.</p>
                    </div>

                    <div class="grid-4 footer_contato">
                        <h3>Contato</h3>
                        <ul>
                            <li>21 23232-4343</li>
                            <li>contato@contato</li>
                            <li>São Paulo - SP</li>    
                        </ul>
                    </div>

                    <div class="grid-4 footer_redes">
                        <h3>Contato</h3>
                        <ul>
                            <li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg"></a></li>
                            <li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.svg"></a></li>
                            <li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.svg"></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="copy">
                <div class="container">
                    <p class="grid-16">Bikcraft 2015 - Alguns direitos reservados.</p> 
                </div>    
            </div>
    </footer>
</body>
</html>