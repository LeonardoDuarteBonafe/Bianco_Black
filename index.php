<!doctype html>
<html lang="en">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link rel="icon" href="Images/Index/Site-Icon/site-icon.png">
    <title>Bianco e Black</title>

    <body class="index-page">
        <!--<header>
<nav>
<div class="social">
<img src="Images/Navbar/facebook-icon.png" class="facebook">
<img src="Images/Navbar/instagram-icon.png" class="instagram">
<img src="Images/Navbar/whatsapp-icon.png" class="whatsapp">
<img src="Images/Navbar/linkedin-icon.png" class="linkedin">
<img src="Images/Navbar/br-icon.png">
<img src="Images/Navbar/en-icon.png">
</div>
<a class="logo" href="index.php">
<img src="Images/Navbar/logo.png"></a>
<div class="mobile-menu">
<div class="line1"></div>
<div class="line2"></div>
<div class="line3"></div>
</div>
<ul class="nav-list">
<li><a href="#materiais">MATERIAIS</a></li>
<li><a href="#empresa">BIANCO E BLACK</a></li>
<li><a href="#contato">CONTATO</a></li>
</ul>
</nav>
</header>-->
        <?php 
        include 'php/header.html';
        ?>

        <div id="carousel-top" class="carousel slide carousel-top" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-top" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-top" data-slide-to="1"></li><!--
                <li data-target="#carousel-top" data-slide-to="2"></li>-->
            </ol>
            <div class="carousel-inner">
                <!--<div class="carousel-item active">
                    <img class="d-block w-100" src="Images/Index/Carousel-Top/banner1.gif">
                    <p>SUPER WHITE</p>
                </div>-->
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Images/Index/Carousel-Top/banner1.png">
                    <p>SUPER WHITE</p>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Index/Carousel-Top/banner2.png">
                    <p>CRISTALLO LIGHT</p>
                </div>
            </div>
        </div>

        <div class="informacao">
            <h2>Para projetos incríveis</h2>
        </div>

        <!--materiais-->
        <div class="materiais" id="materiais">
            <img src="Images/Index/Swiper/fundo.png" class="background">
            <div class="info">
                <h1>NOSSOS MATERIAIS</h1>
                <p>VÁRIAS SUPERFÍCIES, INÚMERAS POSSIBILIDADES</p>
            </div>
            <div class="swiper-container gallery-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide gallery-banner" id="1">
                        <img src="Images/Index/Swiper/branco-cintilante.png" id="01">
                        <p>Branco Cintilante</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="2">
                        <img src="Images/Index/Swiper/branco-dallas.png" id="02">
                        <p>Branco Dallas</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="3">
                        <img src="Images/Index/Swiper/branco-valentino.png" id="03">
                        <p>Branco Valentino</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="4">
                        <img src="Images/Index/Swiper/calacatta.png" id="04">
                        <p>Calacatta</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="5">
                        <img src="Images/Index/Swiper/cristallo.png" id="05">
                        <p>Cristallo</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="6">
                        <img src="Images/Index/Swiper/cristallo-light.png" id="06">
                        <p>Cristallo Light</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="7">
                        <img src="Images/Index/Swiper/granito-verde-ubatuba.png" id="07">
                        <p>Granito Verde Ubatuda</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="8">
                        <img src="Images/Index/Swiper/marmore-arabescato.png" id="08">
                        <p>Mármore Arabescato</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="9">
                        <img src="Images/Index/Swiper/matarazzo.png" id="09">
                        <p>Matarazzo</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="10">
                        <img src="Images/Index/Swiper/sao-gabriel.png" id="10">
                        <p>Sao Gabriel</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="11">
                        <img src="Images/Index/Swiper/sunset.png" id="11">
                        <p>Sunset</p>
                    </div>
                </div>
                
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>
        </div>

        <div class="carousel-bottom">
            <div class="item">
                <img src="Images/Index/Carousel-Bottom/banner1.png">
                <p class="info">INSPIRAÇÕES</p>
                <p class="produto">MATARAZZO</p>
            </div>
        </div>

        <div class="empresa" id="empresa">
            <img src="Images/Index/Empresa/fundo.png" class="fundo">
            <div class="imagens">
                <div class="grande">
                    <img src="Images/Index/Empresa/imagem1.png" id="1">
                </div>
                <div class="pequenas">
                    <img src="Images/Index/Empresa/imagem2.png" id="2">
                    <img src="Images/Index/Empresa/imagem3.png" id="3">
                    <img src="Images/Index/Empresa/imagem4.png" id="4">
                </div>
            </div>
            <div class="info">
                <h1>A BIANCO E BLACK</h1>
                <p>
                    A Bianco e Black está no segmento de rochas ornamentais, desde 2010, trazendo o melhor da natureza até você. Valorizando a qualidade em cada etapa do processo da produção de mármore e granito, sendo referencia no mercado, com uma estrutura preparada para atender a demanda do mercado interno e externo com excelência no beneficiamento.  Destacando-se por sua originalidade e por seu rigoroso processo de seleção, garantindo alto padrão de qualidade de seus produtos.<br> 
                    A história é construída a cada dia, junto a você que faz essa história acontecer. 

                </p>
            </div>
        </div>

        <?php 
        include 'php/form.html';
        include 'php/maps.html';
        include 'php/footer.html';
        ?>

        <!--formulario-->
        <!--<div class="contato row d-flex justify-content-center" id="contato">
<img src="Images/Formulario/fundo.png" class="background">
<div class="col-10">
<div class="row">
<div class="info col-12 col-sm-6">
<h1>Fale Conosco</h1>
<p class="title-square"></p>
<p>Entre em contato preenchendo o formulário ou através do telefone ou e-mail.</p>
</div>
<div class="form col-12 col-sm-6">
<div>
<p>Seu nome (obrigatório)</p>
<input class= "form-text" type="text" name="nome" id="nome" placeholder="">
</div>
<div>
<p>Seu e-mail (obrigatório)</p>
<input class= "form-text" type="text" name="email" id="email" placeholder="">
</div>
<div>
<p>Assunto</p>
<input class= "form-text" type="text" name="assunto" id="assunto" placeholder="">
</div>
<div>
<p>Sua mensagem</p>
<textarea class= "form-text" type="text" name="mensagem" id="mensagem" placeholder="" rows="5"></textarea>
</div>
<button class="send-form">Enviar</button>
</div>
</div>
</div>
</div>
-->
        <!--maps-->
        <!--<div class="maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3729.804743914493!2d-41.07448648545086!3d-20.799185771293743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb969044d7bff8b%3A0x2c393ad7d0934e!2sBianco%26Black!5e0!3m2!1spt-BR!2sbr!4v1628343024668!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>-->

        <!--    <footer class="row">
<div class="logo col-12 col-md-3">
<a href="#"><img src="Images/Footer/logo.png"></a>
</div>
<div class="info col-12 col-md-3">
<a href="">Início</a>
<a href="#materiais">Materiais</a>
<a href="#empresa">Bianco e Black</a>
<a href="#contato">Contato</a>
<div class="social">
<a><img src="Images/Footer/facebook-icon.png" class="facebook"> </a>
<a><img src="Images/Footer/instagram-icon.png" class="instagram"> </a>
<a><img src="Images/Footer/whatsapp-icon.png" class="whatsapp"> </a>
<a><img src="Images/Footer/linkedin-icon.png" class="linkedin"> </a>
</div>
</div>
<div class="endereco col-12 col-md-4">
<h4>Empresa</h4>
<p>Rod. Gumercindo Moura Nunes, 06<br>
Cachoeiro de Itapemirim, ES <br>
CEP 29309-362</p>
<p>+55 28 3333-3333 <br>
biancoeblack@hotmail.com</p>
</div>
<div class="copyright col-12">
<p>Copyright 2021 - All Rights Reserved • Bianco e Black</p>
</div>
</footer>
-->
    </body>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</html>