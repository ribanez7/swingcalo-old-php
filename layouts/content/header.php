<?php include_once '../config.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Swingcaló</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../public/css/base.css">
    <link rel="stylesheet" href="../public/css/skeleton.css">
    <link rel="stylesheet" href="../public/css/layout.css">
    <link rel="stylesheet" href="../public/css/blog.css">
    <link rel="stylesheet" href="../public/css/jquery.sidr.dark.css">
    <link rel="stylesheet" href="../public/js/fancyBox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="../public/js/fancyBox/source/helpers/jquery.fancybox-thumbs.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <link rel="shortcut icon" href="../public/img/favicon.ico">
    <script src="../public/js/modernizr.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../public/js/jquery.sidr.min.js"></script>
    <script src="../public/js/fancyBox/source/jquery.fancybox.pack.js"></script>
    <script src="../public/js/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script src="../public/js/fancyBox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="../public/js/logos.js"></script>
    <script src="../public/js/funciones.js"></script>
</head>
<body>
    
<!-- CABECERA -->
    <div id="header">
        <div id="mobile-header">
                <a id="responsive-menu-button" href="#sidr-main">Menu</a>
        </div>
        <header class="container">
            <div class="thirteen columns">
                <canvas id="swingcalo" width="378" height="122">Actualice su navegador para visualizar correctamente esta web.</canvas>
            	<img src="../public/img/swingcaloė_logo.png" alt="Swingcaló" title="Swingcaló" width="100%" style="margin:0 auto" />
            </div>
            <nav class="three columns">
                <ul>
                    <li><a href="?lang=es"><img src="../public/img/banderas/espanol.png" alt="es" /></a></li>
                    <li><a href="?lang=ca"><img src="../public/img/banderas/catala.png" alt="ca" /></a></li>
                    <li><a href="?lang=en"><img src="../public/img/banderas/english.png" alt="en" /></a></li>
                    <li><a href="?lang=fr"><img src="../public/img/banderas/francois.png" alt="fr" /></a></li>
                </ul>
            </nav>
            <nav id="navigation" class="sixteen columns">
                <ul>
                    <li><a href="http://<?php echo BASE_URL; ?>">La Banda</a></li>
                    <li><a href="http://<?php echo BASE_URL; ?>multimedia">Multimedia</a></li>
                    <li><a href="http://<?php echo BASE_URL; ?>calendario">Calendario</a></li>
                    <li><a href="http://<?php echo BASE_URL; ?>contacto">Contacto</a></li>
                    <li><a href="http://<?php echo BASE_URL; ?>blog">Blog</a></li>
                    <li><a href="http://<?php echo BASE_URL; ?>djangosfugue">Django's Fugue</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="envoltorio">
