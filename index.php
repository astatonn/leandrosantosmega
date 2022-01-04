<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Solicite um orçamento para mixagem e masterização de músicas com um dos melhores engenheiros de áudio do mercado">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href="https://allfont.net/allfont.css?fonts=agency-fb" rel="stylesheet" type="text/css" />
    <title>Leandro Santos - Engenheiro de Áudio</title>
</head>
<body>

  <header class="cabecalho">
    <div class="logo-cabecalho">
        <img class="imagem-cabecalho" src="assets/logo.png" alt="Logo do Leandro Santos - Engenheiro de áudio">
        <div class="texto-cabecalho">
            <p class="titulo-cabecalho">Leandro Santos</p>
            <p class="subtitulo-cabecalho">Engenheiro de Áudio</p>
        </div>
    </div>

    <nav class="cabecalho-menu">
        <a href="#" class="cabecalho-menu-item">Home</a>
        <a href="#" class="cabecalho-menu-item">Portifólio</a>
        <a href="#" class="cabecalho-menu-item">Sobre</a>
        <a href="#" class="cabecalho-menu-item">Orçamento</a>
    </nav>
  </header>

  <main class="conteudo">
      <!-- HOME -->
    <section class="conteudo-principal">
        <div class="conteudo-principal-escrito">
            <h1 class="conteudo-principal-titulo">Leandro Santos</h1>
            <h2 class="conteudo-principal-subtitulo">Engenheiro de Áudio</h2>
            <button class="conteudo-principal-botao">Saiba Mais</button>
        </div>
        <img class="conteudo-principal-imagem" src="assets/mega.jpg" alt="Imagem de Perfil do Leandro Santos">
    </section>

    <!-- PORTIFÓLIO -->
    <section class="conteudo-portifolio">
        <h2 class="conteudo-portifolio-subtitulo">Portifólio</h2>
        <img class="conteudo-carrossel-portifolio"src="http://learnenglish.britishcouncil.org/sites/podcasts/files/2021-10/RS6715_492969113-hig.jpg" alt="Carrossel com capas dos álbuns do Leandro Santos">
    </section>

    <!-- SOBRE -->
    <section class="conteudo-sobre">
        <div class="conteudo-sobre-escrito">
            <h2 class="conteudo-sobre-subtitulo">Sobre</h2>
            <p class="conteudo-sobre-texto">Vida do Lenadro Santos</p>
        </div>
        <img class="conteudo-sobre-imagem"src="http://learnenglish.britishcouncil.org/sites/podcasts/files/2021-10/RS6715_492969113-hig.jpg" alt="Foto de LEandro Santos">
    </section>

    <!-- ORÇAMENTO -->
    <section class="conteudo-orcamento">
        <h2 class="conteudo-orcamento-subtitulo">Solicite um orçamento</h2>
        <form class="conteudo-orcamento-formulario"action="#" method="POST">

            <label for="firstname">Primeiro Nome</label>
            <input type="text" name="firstname" id="firstname" placeholder="Primeiro Nome">

            <label for="lastname">Último Nome</label>
            <input type="text" name="lastname" id="lastname" placeholder="Último Nome">

            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone" placeholder="">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="contato@provedor.com.br">

            <input type="submit" value="Enviar">
        </form>
    </section>

  </main>
  <footer class="conteudo-footer">
      <div class="conteudo-footer-copyright">
        <p>Copyright Leandro Santos 2022 &copy;. Todos os direitos Reservados</p>
        <p>contato@leandrosantos.com.br</p>
      </div>
      <small class="conteudo-footer-dev">desenvolvido por <a href="mailto:lucas.lima.rk@gmail.com">astatonn</a></small>
  </footer>

</body>
</html>