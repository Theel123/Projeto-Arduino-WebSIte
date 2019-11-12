<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contato - Oh Braia</title>
    <link rel="icon" href="imagens/braia.jpg">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">
</head>
<body>
    <main>
        <h1 class="titulo-principal">Contato</h1>
        <div class="container">
            <form>
                <fieldset>
                    <legend>Seus dados</legend>
                    <label class="com-icone" for="nome">Nome completo</label>
                    <input id="nome" type="text" name="nome" required autofocus pattern="[A-Za-z ']{4,}" title="O nome precisa ter pelo menos 4 caracteres">
                    <label class="com-icone" for="email">E-mail</label>
                    <input id="email" type="email" name="email" required placeholder="seu@email.com">
                </fieldset>
                <fieldset>
                    <legend>Assunto</legend>
                    <label>
                        <input type="radio" name="assunto" value="Blog">
                        Blog
                    </label>
                    <label>
                        <input type="radio" name="assunto" value="Serviço">
                        Serviço
                    </label>
                    <label>
                        <input type="radio" name="assunto" value="Outro">
                        Outro
                        <input type="text" name="outro-assunto">
                    </label>
                </fieldset>
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" cols="60" rows="10" placeholder="Digite aqui sua mensagem"></textarea>
                <button type="submit">Enviar mensagem</button>
            </form>
        </div>
    </main>
        <img src="imagens/braia.jpg" alt="Minha foto" class="minha-foto">
    <aside class="navegacao-site">
        <h1>OH BRAIA</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="portfolio.php">Mídias</a></li>
                <li><a href="bio.php">Equipe</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="desenvolvedores.php">Funções</a></li>
                <li><a href="contato.php">Contato</a></li>

            </ul>
        </nav>
       
    </aside>
     <footer class="rodape-pagina">
            <h2>Vamos conversar?</h2>
            <p style="FONT-WEIGHT: bold; FONT-FAMILY: cursive;">VOCÊ PODE NOS CONTATAR <span style="color: #ffcb4b"> POR E-MAIL </span> CDC.UNIB@GMAIL.COM </p>
        <ul class="icones-redes-sociais">
       <li>
                <a href="https://github.com/Theel123/layoutSimples" target="_blank" class="github">
                    Github
                </a>
            </li>
            <li>
                <a href="https://twitter.com/BraiaUnib" target="_blank" class="twitter">
                    Twitter
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UC_ygpg8nRycLi1jnTpXZH6w" target="_blank" class="youtube">
                    Youtube
                </a>
            </li>
            <li>
                <a href="https://instagram.com/" target="_blank" class="instagram">
                   Instagram
                </a>
            </li>
        </ul>
    </footer>
</body>
</html>
