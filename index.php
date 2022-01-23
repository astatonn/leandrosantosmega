<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- METADADOS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Solicite um orçamento para mixagem e masterização de músicas com um dos melhores engenheiros de áudio do mercado">

    <!-- LINKS EXTERNOS -->
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://allfont.net/allfont.css?fonts=agency-fb" rel="stylesheet" type="text/css" />

    <!-- TÍTULO E FAVICON -->
    <title>Leandro Santos - Engenheiro de Áudio</title>
</head>

<body>

    <header class="cabecalho">
        <div class="logo-cabecalho">
            <img class="imagem-cabecalho" src="assets/img/logo.png" alt="Logo do Leandro Santos - Engenheiro de áudio">
            <div class="texto-cabecalho">
                <p class="titulo-cabecalho">LEANDRO SANTOS</p>
                <p class="subtitulo-cabecalho">Engenheiro de Áudio</p>
            </div>
        </div>
        <div class="cabecalho-menu-completo">
            <nav class="cabecalho-menu">
                <a onclick="jumpTo('home-head')" class="cabecalho-menu-item">Home</a>
                <a onclick="jumpTo('servicos-head')" class="cabecalho-menu-item">Serviços</a>
                <a onclick="jumpTo('portifolio-head')" class="cabecalho-menu-item">Portifólio</a>
                <a onclick="jumpTo('sobre-head')" class="cabecalho-menu-item">Sobre</a>
                <a onclick="jumpTo('orcamento-head')" class="cabecalho-menu-item">Orçamento</a>
                <a class="cabecalho-menu-item">Ouça</a>
            </nav>
            <nav class="cabecalho-menu-redes-sociais">
                <a href="#" class="cabecalho-menu-item"><img src="assets/img/icones/facebook.png" alt="ícone do tidal" class="icone-stream"></a>
                <a href="#" class="cabecalho-menu-item"><img src="assets/img/icones/instagram.png" alt="ícone do tidal" class="icone-stream"></a>
            </nav>
        </div>
    </header>

    <main class="conteudo">
        <!-- HOME -->
        <section class="conteudo-principal" id="home-head">
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-titulo">MAIS DE 1M EM REPRODUÇÕES</h1>
                <h2 class="conteudo-principal-subtitulo">
                    "Mixagem: a sutil arte de trazer vida à música, através de movimentos técnicos conscientes."
                    <p class="conteudo-principal-subtitulo-nome">Leandro Santos</p>
                </h2>
                <button class="btn btn-border" onclick="jumpTo('orcamento-head')">Saiba Mais</button>
            </div>
            <img class="conteudo-principal-imagem" src="assets/img/logonome.png" alt="Imagem de Perfil do Leandro Santos">
        </section>

        <!-- SERVIÇOS -->
        <section class="conteudo-servicos">
            <div class="conteudo-sobre-escrito">
                <h2 class="conteudo-subtitulo" id="servicos-head">Serviços</h2>
            </div>
            <div class="servicos-disponiveis">
                <div class="conteudo-servico">
                    <div class="servico">
                        <img src="assets/img/mixagem.png" alt="ícone de mixagem de som" class="servico-imagem">
                        <h3 class="servico-titulo">Mixagem</h3>
                        <p class="servico-informacao">
                            A mixagem tem por objetivo trazer uma combinação equilibrada e coesa de todos os elementos que foram gravados e fazem parte daquela música enfatizando todas as ideias e emoções propostas pelo artista e seu produtor musical.
                        </p>
                    </div>
                    <!--/.MIXAGEM-->
                </div>
                <div class="conteudo-servico">
                    <div class="servico">
                        <img src="assets/img/masterizacao.png" alt="ícone de masterização de som" class="servico-imagem">
                        <h3 class="servico-titulo">Masterização</h3>
                        <p class="servico-informacao">
                            O objetivo da masterização é balancear uma faixa estéreo ou stems, preparando-a para ser reproduzida em todos os dispositivos e formatos de mídia.
                        </p>
                    </div>
                    <!--/.MASTERIZAÇÃO-->
                </div>

                <div class="conteudo-servico">
                    <div class="servico">
                        <img src="assets/img/consultoria.png" alt="ícone de edição de imagem" class="servico-imagem">
                        <h3 class="servico-titulo">Consultoria</h3>
                        <p class="servico-informacao">
                            É um serviço cuja finalidade é analisar e propor melhorias naquilo que o mentorado procura, seja produção musical, mixagem, masterização ou carreira.
                        </p>
                    </div>
                    <!--/.EDIÇÃO-->
                </div>
            </div>
            <button class="btn btn-border" onclick="jumpTo('orcamento-head')">Saiba Mais</button>

        </section>

        <!-- PORTIFÓLIO -->
        <section class="conteudo-portifolio">
            <div class="conteudo-sobre-escrito">
                <h2 class="conteudo-subtitulo" id="portifolio-head">Últimos trabalhos</h2>
                <p class="conteudo-subhead-texto">Ouça meus trabalhos nas principais plataformas de streaming</p>
            </div>
            <div class="carrossel-trabalhos">


                <!-- A Vida É Bem Melhor -->
                <div class="ultimos-trabalhos">
                    <div class="conteudo-ultimo-trabalho">
                        <img src="assets/img/portifolio/a_vida_e_bem_melhor.jpg" alt="ícone de mixagem de som" class="portifolio-imagem">
                        <h4 class="musica-titulo">Arthur Pares - A Vida É Bem Melhor</h4>
                        <ul>
                            <li>
                                <a href="https://open.spotify.com/track/3MMJpPPTs2bfQlu6UE2TwJ?si=a309eeb373fb4dbf" class="musica-item spotify">
                                    <span class="texto-stream">Spotify</span>
                                    <img src="assets/img/icones/spotify.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item deezer">
                                    <span class="texto-stream">Deezer</span>
                                    <img src="assets/img/icones/deezer.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://tidal.com/browse/track/201822353" class="musica-item tidal">
                                    <span class="texto-stream">Tidal</span>
                                    <img src="assets/img/icones/tidal.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item apple">
                                    <span class="texto-stream">iTunes</span>
                                    <img src="assets/img/icones/itunes.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/watch?v=dw0DSUW0hXU" class="musica-item youtube">
                                    <span class="texto-stream">YouTube</span>
                                    <img src="assets/img/icones/youtube.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                        </ul>
                    </div>


                </div>

                <!-- Meu Ladin -->
                <div class="ultimos-trabalhos">
                    <div class="conteudo-ultimo-trabalho">
                        <img src="assets/img/portifolio/meu_ladin.jpg" alt="ícone de mixagem de som" class="portifolio-imagem">
                        <h4 class="musica-titulo">Gustavo Bing - Meu Ladin</h4>
                        <ul>
                            <li>
                                <a href="https://open.spotify.com/track/6GfWC4rxJd5YZ15tqXg2E0?si=a7876b1dc2464dc4" class="musica-item spotify">
                                    <span class="texto-stream">Spotify</span>
                                    <img src="assets/img/icones/spotify.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item deezer">
                                    <span class="texto-stream">Deezer</span>
                                    <img src="assets/img/icones/deezer.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://tidal.com/browse/track/196150454" class="musica-item tidal">
                                    <span class="texto-stream">Tidal</span>
                                    <img src="assets/img/icones/tidal.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item apple">
                                    <span class="texto-stream">iTunes</span>
                                    <img src="assets/img/icones/itunes.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/watch?v=dy4i1SP1vQE" class="musica-item youtube">
                                    <span class="texto-stream">YouTube</span>
                                    <img src="assets/img/icones/youtube.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                <!-- Seu Sorrir -->
                <div class="ultimos-trabalhos">
                    <div class="conteudo-ultimo-trabalho">
                        <img src="assets/img/portifolio/seu_sorrir.jpg" alt="ícone de mixagem de som" class="portifolio-imagem">
                        <h4 class="musica-titulo">João Mar - Seu Sorrir</h4>
                        <ul>
                            <li>
                                <a href="https://open.spotify.com/track/1WLlKl0nO4otZShd2qUBQV?si=0939d77ccaf54923" class="musica-item spotify">
                                    <span class="texto-stream">Spotify</span>
                                    <img src="assets/img/icones/spotify.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item deezer">
                                    <span class="texto-stream">Deezer</span>
                                    <img src="assets/img/icones/deezer.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://tidal.com/browse/track/199678358" class="musica-item tidal">
                                    <span class="texto-stream">Tidal</span>
                                    <img src="assets/img/icones/tidal.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item apple">
                                    <span class="texto-stream">iTunes</span>
                                    <img src="assets/img/icones/itunes.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/watch?v=wYbEfvL9Tp4" class="musica-item youtube">
                                    <span class="texto-stream">YouTube</span>
                                    <img src="assets/img/icones/youtube.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Bateu Saudade -->
                <div class="ultimos-trabalhos">
                    <div class="conteudo-ultimo-trabalho">
                        <img src="assets/img/portifolio/a_vida_e_bem_melhor.JPG" alt="ícone de mixagem de som" class="portifolio-imagem">
                        <h4 class="musica-titulo">Arthur Pares ft. Arthur Sthaphanato - Bateu Saudade</h4>
                        <ul>
                            <li>
                                <a href="https://open.spotify.com/track/5y6FqnIRObGakcu0tAdwLY?si=bc1c40e59dc04c9a" class="musica-item spotify">
                                    <span class="texto-stream">Spotify</span>
                                    <img src="assets/img/icones/spotify.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item deezer">
                                    <span class="texto-stream">Deezer</span>
                                    <img src="assets/img/icones/deezer.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://tidal.com/browse/track/201822355" class="musica-item tidal">
                                    <span class="texto-stream">Tidal</span>
                                    <img src="assets/img/icones/tidal.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item apple">
                                    <span class="texto-stream">iTunes</span>
                                    <img src="assets/img/icones/itunes.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/watch?v=nUMaq6XwBa8" class="musica-item youtube">
                                    <span class="texto-stream">YouTube</span>
                                    <img src="assets/img/icones/youtube.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- Num Love -->
                <div class="ultimos-trabalhos">
                    <div class="conteudo-ultimo-trabalho">
                        <img src="assets/img/portifolio/num_love.jpg" alt="ícone de mixagem de som" class="portifolio-imagem">
                        <h4 class="musica-titulo">João Mar - Num Love</h4>
                        <ul>
                            <li>
                                <a href="https://open.spotify.com/track/0pK8qKmlnSy5tbrGdj3iwY?si=fae06e61154143a4" class="musica-item spotify">
                                    <span class="texto-stream">Spotify</span>
                                    <img src="assets/img/icones/spotify.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item deezer">
                                    <span class="texto-stream">Deezer</span>
                                    <img src="assets/img/icones/deezer.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item tidal">
                                    <span class="texto-stream">Tidal</span>
                                    <img src="assets/img/icones/tidal.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item apple">
                                    <span class="texto-stream">iTunes</span>
                                    <img src="assets/img/icones/itunes.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/watch?v=YiU5rPZWmFQ" class="musica-item youtube">
                                    <span class="texto-stream">YouTube</span>
                                    <img src="assets/img/icones/youtube.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Sempre Vai Ser -->
                <div class="ultimos-trabalhos">
                    <div class="conteudo-ultimo-trabalho">
                        <img src="assets/img/portifolio/sempre_vai_ser.jpg" alt="ícone de mixagem de som" class="portifolio-imagem">
                        <h4 class="musica-titulo">Arthur Pares - Sempre Vai Ser</h4>
                        <ul>
                            <li>
                                <a href="https://open.spotify.com/track/6ua8nggqRf47NM52L9TxXB?si=f61b0bb3f8804130" class="musica-item spotify">
                                    <span class="texto-stream">Spotify</span>
                                    <img src="assets/img/icones/spotify.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item deezer">
                                    <span class="texto-stream">Deezer</span>
                                    <img src="assets/img/icones/deezer.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://tidal.com/browse/track/198342129" class="musica-item tidal">
                                    <span class="texto-stream">Tidal</span>
                                    <img src="assets/img/icones/tidal.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item apple">
                                    <span class="texto-stream">iTunes</span>
                                    <img src="assets/img/icones/itunes.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/watch?v=j1oCXTJ4LAc" class="musica-item youtube">
                                    <span class="texto-stream">YouTube</span>
                                    <img src="assets/img/icones/youtube.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Meu Dengo -->
                <div class="ultimos-trabalhos">
                    <div class="conteudo-ultimo-trabalho">
                        <img src="assets/img/portifolio/meu_dengo.jpg" alt="ícone de mixagem de som" class="portifolio-imagem">
                        <h4 class="musica-titulo">João Mar - Meu Dengo</h4>
                        <ul>
                            <li>
                                <a href="https://open.spotify.com/track/5FCZ14vCOikzChFdELioO2?si=e389775394bf4cf2" class="musica-item spotify">
                                    <span class="texto-stream">Spotify</span>
                                    <img src="assets/img/icones/spotify.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item deezer">
                                    <span class="texto-stream">Deezer</span>
                                    <img src="assets/img/icones/deezer.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://tidal.com/browse/track/205384315" class="musica-item tidal">
                                    <span class="texto-stream">Tidal</span>
                                    <img src="assets/img/icones/tidal.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="musica-item apple">
                                    <span class="texto-stream">iTunes</span>
                                    <img src="assets/img/icones/itunes.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/watch?v=s0Jt7K9Dcgo" class="musica-item youtube">
                                    <span class="texto-stream">YouTube</span>
                                    <img src="assets/img/icones/youtube.svg" alt="ícone do youtube" class="icone-stream">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

             
            </div>

        </section>

        <!-- SOBRE -->
        <section class="conteudo-sobre">
            <div class="conteudo-sobre-escrito">
                <h2 class="conteudo-subtitulo" id="sobre-head">Sobre</h2>
                <p class="conteudo-subhead-texto">Conheça mais sobre a vida do Leandro Santos</p>
            </div>
            <div class="sobre-conteudo">
                <div class="conteudo-sobre-texto">
                    <p> Nascido em 22 de janeiro de 1997, natural da cidade de Duque de Caxias, Rio de Janeiro, Leandro Santos reside em Canoas, cidade no entorno da grande Porto Alegre no Rio Grande do Sul.
                        Despertou seu interesse musical com cerca de 7 anos de idade, influenciado por seu pai que era músico.
                        Com 11 anos começou a estudar contrabaixo e, aos 13, foi aprovado no processo seletivo da escola de música
                        Villa Lobos, no centro do Rio de Janeiro. Após o término de curso, continuou sua busca por conhecimento e crescimento
                        musical no instrumento que o fascina, o contrabaixo. Em 2017, iniciou seus estudos e primeiros trabalhos voltados à produção musical.
                        Devido ao crescimento do seu trabalho, no ano de 2019, tornou-se endorser da <a href="dmark.com">D'Mark</a>, uma das maiores fabricantes de instrumentos de Luthieria dentro e fora do Brasil.
                        Ainda em 2019, despertou interesse pela engenharia de áudio, onde começou a se aprofundar no assunto realizando diversos curso
                        no Brasil e no exterior. No ano seguinte, ingressou no mercado trabalhando diretamente como engenheiro de áudio. Em 2021, tornou-se afiliado da maior loja de plugins e softwares de áudio do Brasil, <a href="plugins.com.br">Plugins Br</a>.
                        Atualmente, Leandro trabalha como engenheiro de áudio e vem realizando trabalhos para artistas nacionais e internacionais, proporcionando uma experiência única a cada música, impondo sua personalidade e trazendo a tona todas as ideias e emoções propostas por cada produtor musical ou artista.


                    </p>
                </div>
                <div class="conteudo-sobre-imagem">
                    <img src="assets/img/profile.jpg" alt="Foto de Perfil do Leandro Santos, Engenheiro de Áudio">
                </div>
            </div>
        </section>

        <!-- ORÇAMENTO -->
        <section class="conteudo-orcamento">
            <div class="conteudo-orcamento-escrito">
                <h2 class="conteudo-subtitulo" id="orcamento-head">Saiba Mais</h2>
                <p class="conteudo-subhead-texto">Entre em contato para mais informações.</p>
            </div>

            <form class="conteudo-orcamento-formulario" id="formularioinformacao" action="controller/submit.php" method="POST">
                <div class="campo-orcamento">
                    <label for="firstname">Nome Completo</label>
                    <input type="text" name="name" id="name" placeholder="Nome Completo">
                </div>

                <div class="campo-orcamento">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" maxlength="15" minlength="14" placeholder="XX XXXXX-XXXX" text" name="firstname" id="firstname" placeholder="Primeiro Nome">
                </div>
                <div class="campo-orcamento">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="contato@provedor.com.br" name="firstname" id="firstname" placeholder="Primeiro Nome">
                </div>

                <div class="campo-orcamento">
                    <label for="descricao">Descreva sua Solicitação</label>
                    <textarea id="descricao" name="descricao" placeholder="Descreva sua solicitação até 1000 caracteres" maxlength="1000" minlength="50" form="formularioinformacao" resizable="false"></textarea>
                </div>
                <div class="campo-orcamento-enviar">
                    <input type="submit" value="Enviar" class="btn btn-border">
                </div>
            </form>

        </section>

    </main>
    <footer class="conteudo-footer">
        <div class="conteudo-footer-copyright">
            <p>Copyright Leandro Santos 2022 &copy;. Todos os direitos Reservados</p>
            <p>contato@leandrosmega.com</p>
        </div>
        <small class="conteudo-footer-dev">desenvolvido por <a href="mailto:lucas.lima.rk@gmail.com">astatonn</a></small>
    </footer>


    <!-- JS -->
    
    <script type="text/javascript" src="assets/js/script.js"></script>



</body>


</html>