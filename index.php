<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title id="title">Oh Braia!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="shortcut icon" href="imagens/braia.jpg">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>    
        <script type="text/javascript" src="js/lightslider.js"></script> 
        <script type="text/javascript">
        /* Slider */
           $(document).ready(function() {
                $("#content-slider").lightSlider({
                    loop:true,
                    keyPress:true
                });
                $('#image-gallery').lightSlider({
                    gallery:true,
                    item:1,
                    thumbItem:9,
                    slideMargin: 7,
                    speed:800,
                    auto:true,
                    loop:true,
                    onSliderLoad: function() {
                        $('#image-gallery').removeClass('cS-hidden');
                    }  
                });
            });
           /*  End Slider */

            /*  LightBox */
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
            /*  End LightBox */
            function searchCep () {
                // Inicia o preloader
                startPreloader ()
                // Recupera o value do input cep
                let cep = document.getElementById('cep').value
                // Inicia requisição AJAX com o axios
                axios.get(`http://api.postmon.com.br/v1/cep/${cep}`)
                        .then(response => {
                            showResults (response.data)
                        })
                        .catch(error => {
                            // console.log(error)
                            // Mostra a div com o erro
                            document.getElementById('error').style.display = 'block'
                            // Mostra a mensagem
                            document.getElementById('error').innerHTML = 'Erro inesperado'
                        })
                        .finally(() => endPreloader ())
                event.preventDefault()
            }
                    function showResults (address) {
                        // Mostra a div com o resultado
                        document.getElementById('results').style.display = 'block'
                        // Mostra os resultados:
                        document.getElementById('results').innerHTML = `
                            <p><b>Bairro: </b> ${address.bairro} </p>
                            <p><b>Cidade: </b> ${address.cidade} </p>
                            <p><b>Logradouro: </b> ${address.logradouro} </p>
                            <p><b>Cep: </b> ${address.cep} </p>
                        `
                    }
                    function startPreloader () {
                        // Exibe a div de preloader
                        document.getElementById('preloader').style.display = 'block'
                        // Limpa os dados do resultado:
                        document.getElementById('results').innerHTML = ''
                        // Oculta a div com o resultado
                        document.getElementById('results').style.display = 'none'
                        // Oculta a div com o erro
                        document.getElementById('error').style.display = 'none'
                    }
                    function endPreloader () {
                        // Oculta a div de preloader
                        document.getElementById('preloader').style.display = 'none'
                    }

                //Criando elemento
                var slide = $('#carousel').bootstrapDynamicCarousel({
                    indicators: false
                });
                    
                //Adicionando imagens
                slide.addItem({
                    id: 'myID',
                    type: 'image',
                    url: 'http://clubedosgeeks.com.br/wp-content/uploads/2015/11/dynamic.fw_-1270x7931-720x340.png',
                    href: 'http://clubedosgeeks.com.br/web-design/jquery/abas-dinamicas-com-boostrap-abrir-fechar-e-arrastar',
                    caption: 'Plugin to add, remove and move Bootstrap tabs',
                    captionTag: 'h3',
                    active: true
                });
                 
                //Adicionando vídeo do youtube
                slide.addItem({
                    type: 'youtube',
                    url: 'https://www.youtube.com/watch?v=uWPMevZbn-s'
                });
                    
                //adicionando vídeo do VIMEO
                slide.addItem({
                    type: 'vimeo',
                    url: 'https://vimeo.com/76979871'
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
                margin-bottom: 40px;
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
	            height:100%;
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
                align-content:center;
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
  <img src="imagens/braia.jpg" class="foto-home">
	<h1>Robô Segue Linha</h1>

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
        <div class="axios">
            <h1>Receba nossa NewsLetter</h1>

            <form id="form-cep" method="post" action="newsletter.php" class="form form-inline">

                <input type="text" name="nome" id="nome" placeholder="Informe seu nome "class="form-control">
                <input type="text" name="email" id="email" placeholder="Informe seu Email" class="form-control">
                <input type="text" name="cep" id="cep" placeholder="Informe o cep" class="form-control">
                <button type="button" class="btn btn-info" onclick="searchCep()">Buscar</button>
                <button type="submit" class="btn btn-info">Receber</button>

            </form>
        </div>

                 


        </div>


            <div id="error" style="display: none;" class="alert alert-danger"></div>

            <div id="preloader" style="display: none;" class="alert alert-info">
                Carregando...
            </div>

            <div id="results" style="display: none;"></div>
        </div><!--Container-->
            </div>
            <nav id="menu">
                <ul>
                     <li><a OnCLick="this.style.backgroundColor='red';" href="index.php">Home</a></li>
                     <li><a OnCLick="this.style.backgroundColor='red';" href="portfolio.php">Portfolio</a></li>
                     <li><a OnCLick="this.style.backgroundColor='red';" href="bio.html">Guia Dev</a></li>
                     <li><a OnCLick="this.style.backgroundColor='red';" href="desenvolvedores.html">Desenvolvedores</a></li>
                     <li><a OnCLick="this.style.backgroundColor='red';" href="contato.html">Contato</a></li>
                </ul>
            </nav>

            <section class="secao-inicio saudacao">
	  


    </div>
			   <span >sigo linhas de forma<em>THE FAST AND THE FURIOUS</em></span></p>
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
                        <a href="https://ohbraiaunib.blogspot.com/2019/09/terceira-dimensao-realidade-aumentada.html" target="_blank" >Terceira Dimensão , Realidade Aumentada </a>
                        <p class="inicio-post">
                       Pokémon Go  usa realidade aumentada para levar personagens da Nintendo ao mundo real, mas de forma virtual.

                    Basicamente, o jogo funciona por meio da câmera, que coloca, na imagem que você vê através dela, criando vários pokémons virtuais no ambiente real. Para efeito de comparação, vale a menção do Snapchat, que põe sobre os rostos dos usuários acessórios virtuais.


                        </p>
                    </li>

                    <li>
                        <a href="https://ohbraiaunib.blogspot.com/2019/09/os-desenhos-vetorizacao-capitulo-6.html" target="_blank" >Vetorização</a>
                         <p class="inicio-post">
                            Desenhos vetoriais são imagens que utilizam formas geométricas primitivas, como linhas, curvas, pontos, formas e polígonos, como base de sua construção. Todos estes elementos são baseados em fórmulas matemáticas específicas para serem construídos.
                        </p>
                    </li>
                    <li>
                        <a href="https://ohbraiaunib.blogspot.com/2019/10/o-audio-som-binaural-capitulo-9.html" target="_blank" >Audio Binaural</a>
                         <p class="inicio-post">
                            O que são frequências binaurais?
                        </p>
                    </li>
                </ol>
                <a class="botao-index" href="https://ohbraiaunib.blogspot.com/" target="_blank">Visite nosso blog</a>
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
                <a href="https://twitter.com/BraiaUnib?s=08" target="_blank" class="twitter">
                    Twitter
                </a>
            </li>
            <li>
                <a href=" https://www.youtube.com/channel/UC9Cl5w1ASiqc-5rHoH7kgoQ?view_as=subscriber"target="_blank"  class="youtube">
                    Youtube

                </a>
            </li>

            <li>
                <a href=" https://www.instagram.com/ohbraia?r=nametag" target="_blank"  class="instagram">
                    Instagram
                </a>
            </li>
        </ul>

        </footer>

      
    </body>
    
</html>
