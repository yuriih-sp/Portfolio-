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
    <link rel="stylesheet" href="css/contato.css">
    <title>Contato</title>
</head>
<body>
    
    <header class="header">
        <div class="container">
            <a href="index.html" class="grid-4"> <img src="img/bikcraft.svg" alt="bikcraft"></a>
            <nav class="grid-12 header_menu">
                <ul>
                    <li><a href="sobre.html" >Sobre</a></li>
                    <li><a href="produtos.html" >Produtos</a></li>
                    <li><a href="portfolio.html" >Portfólio</a></li>
                    <li><a href="contato.html" class="menu_ativo">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="introducao-interna interna_contato">
        <div class="container">
            <h1>Contato</h1>
            <p>Conheça os nossos projetos</p>
        </div>
    </section>

    <section class="contato container">
        <form id="form_orcamento" class="contato_form grid-8">
            <label for="name">Nome</label>
            <input type="text" id="nome">

            <label for="email">Email</label>
            <input type="email" id="email">

            <label for="telefone">Telefone</label>
            <input type="text" id="telefone">

            <label for="espec">Especificações</label>
            <textarea id="espec"></textarea>
            <button type="submit" class="btn btn-preto">Enviar</button> 
        </form>
        <div class="contato_dados grid-8" >
            <h3>Dados</h3>
            <span>+55 99 99999 9999</span>
            <span>orcamento@contato.om</span>
            <span>Rua (Nome da Rua) - (Nome da Cidade)</span>
            <span>Estado - BR</span>
            <h3>Redes Sociais</h3>
            <ul>
                <li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg"></a></li>
                <li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.svg"></a></li>
                <li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.svg"></a></li>
                
            </ul>
        </div>
    </section>
    
    <section class="container contato_mapa">
        <a href="http://google.com" target="_blank" class="grid-16"><img src="img/endereco-bikcraft.jpg" alt="Endereço"></a>
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