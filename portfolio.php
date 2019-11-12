<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Portfolio - Oh Braia</title>
        
        <link rel="shortcut icon" href="imagens/braia.jpg">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/visage.css">
        <link rel="stylesheet" href="css/portfolio.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.visage.js"></script>
        
        <script type="text/javascript">
            $.fn.loadImages = function (callback) {
                var element = this;
                $.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?lang=en-us&format=json&jsoncallback=?", function (data, textStatus) {
                    $.each(data.items, function (i, item) {
                        var title = item.title;
                        var link = item.media.m.replace(/_m\.jpg$/, ".jpg");
                        var thumbnail = item.media.m.replace(/_m\.jpg$/, "_s.jpg");
                        $("<a/>").attr({
                            "href": link
                        }).append(
                            $("<img/>").attr({
                                "src": thumbnail,
                                "alt": title,
                                "title": title
                            }).css({
                                "margin": "2px",
                                "border": "none",
                                "vertical-align": "bottom"
                            })
                        ).appendTo(element);
                    });
                    callback();
                });
            };
            $(document).ready(function () {
                $("#images").loadImages(function () {
                    $("#images a").visage();
                });
                setTimeout(function () {
                    $("#images-alt").loadImages(function () {
                        $("#images-alt a").visage({
                            "files": {
                                "blank": "imagens/blank.gif",
                                "error": "imagens/error.png"
                            },
                            "attr": {
                                "close": {"id": "visage-alt-close"},
                                "title": {"id": "visage-alt-title"},
                                "count": {"id": "visage-alt-count"},
                                "container": {"id": "visage-alt-container"},
                                "image": {"id": "visage-alt-image", "src": "imagens/blank.gif"},
                                "visage": {"id": "visage-alt"},
                                "overlay": {"id": "visage-alt-overlay"},
                                "prev": {"id": "visage-alt-nav-prev"},
                                "prev_disabled": {"id": "visage-alt-nav-prev"},
                                "next": {"id": "visage-alt-nav-next"},
                                "next_disabled": {"id": "visage-alt-nav-next"}
                            },
                            "enabledClass": "visage-alt-enabled",
                            "disabledNavClass": "visage-alt-nav-disabled",
                            "transitionResizeSpeed": 300, // Non-zero to show resize animation
                            "addDOM": function (visageDOM, options) {
                                $.fn.visage.addDOM(visageDOM, options);
                                // Moves elements to overlay so they are all in the same stacking context
                                $(visageDOM.prev).add(visageDOM.next).add(visageDOM.count).add(visageDOM.title).appendTo(visageDOM.overlay);
                            },
                            // We move setting image source to preTransitionResize so that transition resize is also resizing the image
                            // (So that image is shown as soon as possible and we are not waiting for the resize to finish to display it)
                            "preTransitionResize": function (image, values, group, index, visageDOM, isStopping, finish, options) {
                                $.fn.visage.preTransitionResize(image, values, group, index, visageDOM, isStopping, function () {}, options);
                                visageDOM.image.attr("src", values.src);
                                finish();
                            },
                            "postTransitionResize": function (image, values, group, index, visageDOM, isStopping, finish, options) {
                                finish();
                            }
                        });
                    });
                }, 2000);
            });
        </script>
    </head>
    <body>
    <main>
        <h1 class="titulo-principal">Mídias</h1>
        <div class="container">

        <h1 style="color: #0073b9; font-size: 3em; text-transform: uppercase; text-shadow: 2px 2px #000;">Galeria</h1>
        <br/>
        <br/>
        <div id="images-alt"></div>
        <br/>
        <br/>
        <h1 style="color: #0073b9; font-size: 3em; text-transform: uppercase; text-shadow: 2px 2px #000;">Videos</h1>
        
        <h1 style="color: #0073b9; font-size: 3em; text-transform: uppercase; text-shadow: 2px 2px #000;">PODCASTS</h1>

        <h6>Primeiro Episódio</h6>
        <iframe frameborder="no" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/668799719&amp;color=ff5500" width="100%"></iframe>

        <h6>Segundo Episódio</h6>
        <iframe allow="autoplay" frameborder="no" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/671511386&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true" width="100%"></iframe>

        <h6>Terceiro Episódio</h6>
        <iframe frameborder="no" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/668799719&amp;color=ff5500" width="100%"></iframe>

        <h6>Quarto Episódio</h6>
        <iframe frameborder="no" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/668799719&amp;color=ff5500" width="100%"></iframe>
      
   
        <h6>Quinto Episódio</h6>
        <iframe frameborder="no" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/668799719&amp;color=ff5500" width="100%"></iframe>
        </div>
    </main>
    <img src="imagens/braia.jpg" alt="Minha foto" class="minha-foto">
    <aside class="navegacao-site">
        <h1>Oh Braia</h1>
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
                <a href="https://www.youtube.com/channel/UC_ygpg8nRycLi1jnTpXZH6w" class="youtube">
                    Youtube
                </a>
            </li>
            <li>
                <a href="https://instagram.com/" class="instagram">
                    Instagram
                </a>
            </li>
        </ul>
        </footer>
    </body>
</html>
