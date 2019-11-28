<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Portfolio - Oh Braia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/braia.jpg">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">
    <link href="css/rvslider.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.visage.js"></script>
    <style type="text/css" media="screen">
  
    </style>
    <script type="text/javascript">


</script>
</head>
<body>
    <main>
        <h1 class="titulo-principal">Portfolio</h1>

        <nav id="menu">
                <ul>
                     <li><a OnCLick="this.style.backgroundColor='red';" href="index.php">Home</a></li>
                     <li><a OnCLick="this.style.backgroundColor='red';" href="portfolio.php">Portfolio</a></li>
                     <li><a OnCLick="this.style.backgroundColor='red';" href="bio.html">Guia Dev</a></li>
                     <li><a OnCLick="this.style.backgroundColor='red';" href="desenvolvedores.html">Desenvolvedores</a></li>
                     <li><a OnCLick="this.style.backgroundColor='red';" href="contato.html">Contato</a></li>
                </ul>
            </nav>
        <div class="container">

        <h1>Galeria</h1>
        <br>
        <br>
      <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="imagens/fotoSliderGaleria/IMG-20191114-WA0048.jpg" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>



    <?php 

        $pasta = 'imagens/fotoSliderGaleria/';
        $arquivos = glob("$pasta{*.jpg,*.JPG,*.png,*.gif,*.bmp}", GLOB_BRACE);

        $i = 0;
        foreach($arquivos as $img){

        echo ' 
          <div class="carousel-item">
          <div class="view">
            <img class="d-block w-100" src='.$img.' alt="Second slide">
            <div class="mask rgba-black-light"></div>
          </div>
        </div>';

        $i++;
    }    
            ?>

  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
        <h1>Videos</h1>
        <div class="rvs-container">

        <div class="rvs-item-container">
            <div class="rvs-item-stage">
            <!-- The below is a single item, simply duplicate this layout for each item -->
            <div class="rvs-item" style="background-image: url(imagens/imgVideos/testes.png)">
                <p class="rvs-item-text">Primeiros Testes <small>Cientistas da Computação</small></p>
                <a href="https://www.youtube.com/watch?v=608z2i7kQcU" class="rvs-play-video"></a>
            </div>

              <div class="rvs-item" style="background-image: url(imagens/imgVideos/apps.png)">
                <p class="rvs-item-text">Multimidia App's <small>Cientistas da Computação</small></p>
                <a href="https://www.youtube.com/watch?v=3bKT5QA-kek" class="rvs-play-video"></a>

            </div>  <div class="rvs-item" style="background-image: url(imagens/imgVideos/animacoes.png)">
                <p class="rvs-item-text">Multimidia Animações <small>Cientistas da Computação</small></p>
                <a href="https://www.youtube.com/watch?v=tu6604gnS-Y" class="rvs-play-video"></a>
            </div>
             <div class="rvs-item" style="background-image: url(imagens/imgVideos/apresentacoes.png)">
                <p class="rvs-item-text">Multimidia Imagens <small>Cientistas da Computação</small></p>
                <a href="https://www.youtube.com/watch?v=3eC_aZiR9Ew" class="rvs-play-video"></a>
            </div>
            <div class="rvs-item" style="background-image: url(imagens/imgVideos/tarefas.png)">
                <p class="rvs-item-text">Multimidia Autoria <small>Cientistas da Computação</small></p>
                <a href="https://www.youtube.com/watch?v=fL0TabSGGuE" class="rvs-play-video"></a>
            </div>
          
               <div class="rvs-item" style="background-image: url(imagens/imgVideos/equipeReunida.png)">
                <p class="rvs-item-text">Equipe Reunida <small>Cientistas da Computação</small></p>
                <a href="https://www.youtube.com/watch?v=XhklXkb_yFg" class="rvs-play-video"></a>
            </div>


        </div>
    </div>

    <div class="rvs-nav-container">
        <a class="rvs-nav-prev"></a>
        <div class="rvs-nav-stage">

            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(imagens/imgVideos/testes.png)"></span>
                <h4 class="rvs-nav-item-title">Primeiros Testes Arduino</h4>
                <small class="rvs-nav-item-credits">Cientistas da Computação</small>
            </a>

             <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(imagens/imgVideos/apps.png)"></span>
                <h4 class="rvs-nav-item-title">Multimidia App's</h4>
                <small class="rvs-nav-item-credits">Cientistas da Computação</small>
            </a>

             <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(imagens/imgVideos/animacoes.png)"></span>
                <h4 class="rvs-nav-item-title">Multimidia Animações</h4>
                <small class="rvs-nav-item-credits">Cientistas da Computação</small>
            </a>

             <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(imagens/imgVideos/apresentacoes.png)"></span>
                <h4 class="rvs-nav-item-title">Multimidia Imagens</h4>
                <small class="rvs-nav-item-credits">Cientistas da Computação</small>
            </a>
              <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(imagens/imgVideos/tarefas.png)"></span>
                <h4 class="rvs-nav-item-title">Multimidia Autoria</h4>
                <small class="rvs-nav-item-credits">Cientistas da Computação</small>
            </a>
            
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(imagens/imgVideos/tarefas.png)"></span>
                <h4 class="rvs-nav-item-title">Equipe Reunida</h4>
                <small class="rvs-nav-item-credits">Cientistas da Computação</small>
            </a>
          
            

        </div>
        <a class="rvs-nav-next"></a>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="js/rvslider.min.js"></script>
<script>
    jQuery(function($){
        $('.rvs-container').rvslider();
    });
</script>

        <br>
        <br>
        <h1>PODCASTS</h1>

        <h6>Primeiro Episódio</h6>
        <iframe frameborder="no" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/668799719&amp;color=ff5500" width="100%"></iframe>

        <h6>Segundo Episódio</h6>
        <iframe allow="autoplay" frameborder="no" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/671511386&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true" width="100%"></iframe>

        <h6>Terceiro Episódio</h6>
        <iframe frameborder="no" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/668799719&amp;color=ff5500" width="100%"></iframe>
        </div>
    </main>
    <img src="imagens/braia.jpg" alt="Minha foto" class="minha-foto">

  
               <footer class="rodape-pagina">
            <h2>Vamos conversar?</h2>
            <p>Você pode nos contatar <a href="contato.html">por e-mail</a> ou pelo telefone <a  target="_blank" href="https://api.whatsapp.com/send?phone=5511963444494&text=Ol%C3%A1%20seja%20bem%20vindo%2C%20somos%20da%20equipe%20cdc8%2C%20qual%20a%20sua%20duvida%20ou%20sugest%C3%A3o%20%3F">(12) 96344-4494</a></p>
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
