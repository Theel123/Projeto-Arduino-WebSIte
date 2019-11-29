<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title id="title">Oh Braia!</title>
        <link rel="shortcut icon" href="imagens/braia.jpg">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/lightslider.js"></script> 
        <script src="js/fire.js"></script>

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


(function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] 
                                   || window[vendors[x]+'CancelRequestAnimationFrame'];
    }
 
    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
              timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };
 
    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };
}());


(function() {

    // Get the buttons.
    var startBtn = document.getElementById('button');
  /*var resetBtn = document.getElementById('resetBtn');*/
    // A variable to store the requestID.
    var requestID;
    // Canvas
    var canvas = document.getElementById('canvas');
    // 2d Drawing Context.
    var ctx = canvas.getContext('2d');

    // Variables to for the drawing position and object.
    var posX = 0;
    var W = 246;
  var H = 60;
  var circles = []; 
  
  //Get canvas size
  canvas.width = 246;
  canvas.height = 60; 

    // Animate.
    function animate() {
        requestID = requestAnimationFrame(animate);
    //Fill canvas with black color
    //ctx.globalCompositeOperation = "source-over";
    ctx.fillStyle = "rgba(0,0,0,0.15)";
    ctx.fillRect(0, 0, W, H);

    //Fill the canvas with circles
    for(var j = 0; j < circles.length; j++){
      var c = circles[j];

      //Create the circles
      ctx.beginPath();
      ctx.arc(c.x, c.y, c.radius, 0, Math.PI*2, false);
          ctx.fillStyle = "rgba("+c.r+", "+c.g+", "+c.b+", 0.5)";
      ctx.fill();

      c.x += c.vx;
      c.y += c.vy;
      c.radius -= .02;

      if(c.radius < 0)
        circles[j] = new create();
    }
    
     
        
    }
  
 //Random Circles creator
      function create() {

        //Place the circles at the center

        this.x = W/2;
        this.y = H/2;


        //Random radius between 2 and 6
        this.radius = 2 + Math.random()*3; 

        //Random velocities
        this.vx = -5 + Math.random()*10;
        this.vy = -5 + Math.random()*10;

        //Random colors
        this.r = Math.round(Math.random())*255;
        this.g = Math.round(Math.random())*255;
        this.b = Math.round(Math.random())*255;
      }

      for (var i = 0; i < 500; i++) {
        circles.push(new create());
      }

    // Event listener for the start button.
    startBtn.addEventListener('mouseover', function(e) {
        e.preventDefault();

        // Start the animation.
        requestID = requestAnimationFrame(animate);
    });


    // Event listener for the stop button.
    startBtn.addEventListener('mouseout', function(e) {
        e.preventDefault();

        // Stop the animation;
        cancelAnimationFrame(requestID);
    
    e.preventDefault();

        // Reset the X position to 0.
        posX = 0;

        // Clear the canvas.
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // Draw the initial box on the canvas.
        ctx.fillRect(posX, 0, boxWidth, canvas.height);
    
    });
  
  
    /*// Event listener for the reset button.
    resetBtn.addEventListener('click', function(e) {
        e.preventDefault();

        // Reset the X position to 0.
        posX = 0;

        // Clear the canvas.
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // Draw the initial box on the canvas.
        ctx.fillRect(posX, 0, boxWidth, canvas.height);
    });*/


}());
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
  #fireCanvas {
       margin: 10px;
        margin-left: 635px;
        text-align:center;
        align-content: center;
        
      }
      table {
        border-collapse: collapse;
        border: 1px solid #000;
      }
      td {
        width: 32px;
        height: 32px;
        color: #FFF;
        border: 1px solid #000;
        text-align: center;
        vertical-align: center;
        font-family: arial;
        font-size: 10px;
        position: relative;
        font-weight: bold;
      }
      td.pixel {
        width: 4px;
        height: 4px;
        border: 0;
      }
      .pixel-index {
        font-size: 7px;
        display: inline-block;
        position: absolute;
        top: 1px;
        right: 1px;
        color: #927450;
      }
   
 
 .logo_header {
  transform: rotate(-15deg);
  position:relative;
  top:50%;
  left:50%;
  margin-left:-50px;
  width: 100px;
  height: 100px;
  border-radius: 85px;
  
  /* CÓDIGO PARA CHAMAR A ANIMAÇÃO */
  -webkit-animation: rodaroda 3s linear alternate 3;
  -moz-animation: rodaroda 3.0s linear infinite;
  -ms-animation: rodaroda 3.0s linear infinite;
  -o-animation: rodaroda 3.0s linear infinite;
  animation: rodaroda 3.0s linear infinite;
}

/* KEY FRAMES PARA FAZER OS GIROS */
@-webkit-keyframes rodaroda {
    0% { -webkit-transform:rotate(0deg); -moz-transform:rotate(0deg); -ms-transform:rotate(0deg); -o-transform:rotate(0deg); transform:rotate(0deg); }
    50% { -webkit-transform:rotate(180deg); -moz-transform:rotate(180deg); -ms-transform:rotate(180deg); -o-transform:rotate(180deg); transform:rotate(180deg); }
    100% { -webkit-transform:rotate(360deg); -moz-transform:rotate(360deg); -ms-transform:rotate(360deg); -o-transform:rotate(360deg); transform:rotate(360deg); }
}
@-moz-keyframes rodaroda {
    0% { -webkit-transform:rotate(0deg); -moz-transform:rotate(0deg); -ms-transform:rotate(0deg); -o-transform:rotate(0deg); transform:rotate(0deg); }
    50% { -webkit-transform:rotate(180deg); -moz-transform:rotate(180deg); -ms-transform:rotate(180deg); -o-transform:rotate(180deg); transform:rotate(180deg); }
    100% { -webkit-transform:rotate(360deg); -moz-transform:rotate(360deg); -ms-transform:rotate(360deg); -o-transform:rotate(360deg); transform:rotate(360deg); }
}
@-ms-keyframes rodaroda {
    0% { -webkit-transform:rotate(0deg); -moz-transform:rotate(0deg); -ms-transform:rotate(0deg); -o-transform:rotate(0deg); transform:rotate(0deg); }
    50% { -webkit-transform:rotate(180deg); -moz-transform:rotate(180deg); -ms-transform:rotate(180deg); -o-transform:rotate(180deg); transform:rotate(180deg); }
    100% { -webkit-transform:rotate(360deg); -moz-transform:rotate(360deg); -ms-transform:rotate(360deg); -o-transform:rotate(360deg); transform:rotate(360deg); }
}
@-o-keyframes rodaroda {
    0% { -webkit-transform:rotate(0deg); -moz-transform:rotate(0deg); -ms-transform:rotate(0deg); -o-transform:rotate(0deg); transform:rotate(0deg); }
    50% { -webkit-transform:rotate(180deg); -moz-transform:rotate(180deg); -ms-transform:rotate(180deg); -o-transform:rotate(180deg); transform:rotate(180deg); }
    100% { -webkit-transform:rotate(360deg); -moz-transform:rotate(360deg); -ms-transform:rotate(360deg); -o-transform:rotate(360deg); transform:rotate(360deg); }
}
@keyframes rodaroda {
    0% { -webkit-transform:rotate(0deg); -moz-transform:rotate(0deg); -ms-transform:rotate(0deg); -o-transform:rotate(0deg); transform:rotate(0deg); }
    50% { -webkit-transform:rotate(180deg); -moz-transform:rotate(180deg); -ms-transform:rotate(180deg); -o-transform:rotate(180deg); transform:rotate(180deg); }
    100% { -webkit-transform:rotate(360deg); -moz-transform:rotate(360deg); -ms-transform:rotate(360deg); -o-transform:rotate(360deg); transform:rotate(360deg); }
}
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
     
            <h1>Receba nossa NewsLetter</h1>

            <form method="post" action="newsletter.php" class="form form-inline">
                <input type="text" name="nome" id="nome" placeholder="Informe seu nome "class="form-control">
                <input type="text" name="email" id="email" placeholder="Informe seu Email" class="form-control">
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
            <div class="logo_header">
                <img src="imagens/braia.jpg" alt="Logo Kw Desgign" width="80px" height="80px">
            </div>
  <div id="fireCanvas"></div>
      <div class="margin">
        <button onclick="decreaseFireSource()">-</button>
        <button onclick="destroyFireSource()">Min Fire</button>
        <button onclick="createFireSource()">Max Fire</button>
        <button onclick="increaseFireSource()">+</button>
      </div>
      <div class="margin">
        <button onclick="toggleDebugMode()">Toggle Debug Mode</button>
      </div>            <div class="logo_header">
                <img src="imagens/braia.jpg" alt="Logo Kw Desgign" width="80px" height="80px">
            </div>
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
                <a class="botao-index" href="portfolio.php">Acesse Nossa Galeria</a>
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
            <p>Você pode nos contatar <a href="contato.html">por e-mail</a> ou pelo telefone <a  target="_blank" href="https://api.whatsapp.com/send?phone=5511963444494&text=Ol%C3%A1%20seja%20bem%20vindo%2C%20somos%20da%20equipe%20cdc8%2C%20qual%20a%20sua%20duvida%20ou%20sugest%C3%A3o%20%3F">(12) 96344-4494</a></p>

            <ul class="icones-redes-sociais">
                <li>
                    <a href="https://github.com/Theel123/layoutSimples" target="_blank" class="github">Github</a>
                </li>

                <li>
                    <a href="https://twitter.com/BraiaUnib?s=08" target="_blank" class="twitter">Twitter</a>
                </li>

                <li>
                    <a href=" https://www.youtube.com/channel/UC9Cl5w1ASiqc-5rHoH7kgoQ?view_as=subscriber"target="_blank"  class="youtube">Youtube </a>
                </li>

                <li>
                    <a href=" https://www.instagram.com/ohbraia?r=nametag" target="_blank"  class="instagram">Instagram</a>
                </li>
            </ul>

        </footer>
      
    </body>
    
</html>
