<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Oh Braia!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="shortcut icon" href="imagens/braia.jpg">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>   
        <script type="text/javascript" src="js/lightslider.js"></script> 
        <script type="text/javascript">

           $(document).ready(function() {
                $("#content-slider").lightSlider({
                    loop:true,
                    keyPress:true
                });
                $('#image-gallery').lightSlider({
                    gallery:true,
                    item:1,
                    thumbItem:9,
                    slideMargin: 0,
                    speed:500,
                    auto:true,
                    loop:true,
                    onSliderLoad: function() {
                        $('#image-gallery').removeClass('cS-hidden');
                    }  
                });
            });

            $(document).ready(function() {
                $('.newsletter').click(function(){
                    $('.background, .box').animate({'opacity':'.60'}, 200, 'linear');
                    $('.box').animate({'opacity':'1.00'},200, 'linear');
                    $('.background, .box').css('display', 'block')
                });

                $('.close').click(function() {
                    $('.background, .box').animate({'opacity':'0'},200, 'linear', function() {
                        $('.background, .box').css('display', 'none');

                    });
                });

                    $('.background').click(function() {
                    $('.background, .box').animate({'opacity':'0'},200, 'linear', function() {
                    $('.background, .box').css('display', 'none');

                    });
                });
            });
</script>
        <style type="text/css">
    /*Slider*/
            ul{
                list-style: none outside none;
                padding-left: 0;
                margin: 0;
            }
            .demo .item{
                margin-bottom: 60px;
            }
            .content-slider li{
                background-color: #000000;
                text-align: center;
                color: #FFF;
            }
            .content-slider h3 {
                margin: 0;
                padding: 70px 0;
            }
            .demo{

            width: 100%;

            }
        /*End-Slider*/

     /*LightBox*/
            .background {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #000000;
                opacity: .0;
                -moz-opacity: .0;
                filter:alpha(opacity=0);
                z-index:100;
                display: none;
            }

            .box{
                position: absolute;
                top: 10%;
                left: 20%;
                width: 750px;
                height: 550px;
                background-color: #FFFFFF;
                z-index: 101;
                padding: 14px;
                border-radius: 4px;
                -moz-border-radius: 4px;
                -webkit-border-radius:4px;
                box-shadow: 2px 2px 2px #333333; 
                display: none;

            }
            .close {
                float: right;
                margin-right: 10px;
                cursor: pointer;
            }
               /*End-LightBox*/
        </style>
        
        <link rel="stylesheet"  href="css/lightslider.css"/>
    </head>
    <body>
        <header class="titulo-principal">
            <img class="foto-home" src="imagens/braia.jpg" alt="Foto"/>
            <h1>Oh Braia!</h1>
            <p class="subtitulo-principal">Robo Segue Linha</p>
            <ul class="palavras-home">
                <li class="palavra-home arduino">Arduino</li>
                <li class="palavra-home multimidia">Multimidia</li>
                <li class="palavra-home audio">Audio</li>
                <li class="palavra-home autoria">Autoria</li>
                <li class="palavra-home html5">HTML5</li>
                <li class="palavra-home javascript">JavaScript</li>
                <li class="palavra-home videos">Video</li>
                <li class="palavra-home animacoes">Animações</li>
                <li class="palavra-home projetos">Projetos</li>
                <li class="palavra-home imagens">Imagens</li>
                <li class="palavra-home css3">CSS3</li>
            </ul>
        </header>

        <main>
            <a class="newsletter"  href="#">NewsLetter</a>
            <div class="background"></div>

            <div class="box">
                <div class="close">X</div> 
                <form action="index_submit" method="get" accept-charset="utf-8">
                  
            <div class="container">
            
                <button type="submit" class="btn btn-info">Buscar</button>
                    
                </form>
            </div>    
        </div>
            <nav id="menu">
                <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="portfolio.html">Portfolio</a></li>
                     <li><a href="bio.html">Sobre mim</a></li>
                     <li><a href="blog.html">Blog</a></li>
                     <li><a href="desenvolvedores.html">Desenvolvedores</a></li>
                     <li><a href="contato.html">Contato</a></li>
                </ul>
            </nav>
            <section class="secao-inicio saudacao">
                <p class="saudacao"><span class="saudacao-inicio">Olá,</span> meu nome é <strong>Braia O'Conner</strong> <span class="saudacao-ultima-linha">sigo linhas de forma<em>VELOZ E FURIOSA</em></span></p>
                <a class="botao-index" href="bio.html">Acesse Nosso Guia de Desenvolvimento</a>
            </section>
            
            <section class="secao-inicio trabalhos">
                <h2>Principais Fotos</h2>

                <!---- SLIDER ------>

                <div class="demo">
                    <div class="item">            
                        <div class="clearfix" >
                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                <?php 
                                    $pasta = 'imagens/fotosSlider/';
                                    $arquivos = glob("$pasta{*.jpg,*.JPG,*.png,*.gif,*.bmp}", GLOB_BRACE);

                                    $i = 0;
                                    foreach($arquivos as $img){

                                        echo '<li data-thumb='.$img.'><img src='.$img.'></li>';

                                        $i++;
                                    }    
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

            <!------------------>
                <a class="botao-index" href="portfolio.html">Acesse Nossa Galeria</a>
            </section>
            <section class="secao-inicio blog">
                <h2>Blog</h2>
                <small>Últimos posts</small>
                <ol>
                    <li class="mais-recente">
                        <a href="blog.html">O essencial de design responsivo</a>
                        <p class="inicio-post">
                            Design responsivo tem ganho cada vez mais atenção como técnica de desenvolvimento de páginas web para dispositivos móveis. Mas como começar?
                        </p>
                    </li>
                    <li>
                        <a href="blog.html">Por que fazer páginas acessíveis?</a>
                    </li>
                    <li>
                        <a href="blog.html">JavaScript não obstrusivo</a>
                    </li>
                </ol>
                <a class="botao-index" href="blog.html">Visite nosso blog</a>
            </section>
        </main>
       <footer class="rodape-pagina">
            <h2>Vamos conversar?</h2>
            <p>Você pode nos contatar <a href="contato.html">por e-mail</a> ou pelo telefone <a href="tel:+55=1234">(12) 3456-7890</a></p>
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
                <a href="https://br.linkedin.com/pub/joão-da-silva/32/4/508" class="youtube">
                    Instagram
                </a>
            </li>
            <li>
                <a href="https://br.linkedin.com/pub/joão-da-silva/32/4/508" class="instagram">
                    Youtube
                </a>
            </li>
        </ul>
        </footer>
    </body>
</html>
