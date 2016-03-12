<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Swingcaló - Admin</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../../public/css/base.css">
    <link rel="stylesheet" href="../../public/css/skeleton.css">
    <link rel="stylesheet" href="../../public/css/layout.css">
    <link rel="stylesheet" href="../public/css/blog.css">
    <link rel="stylesheet" href="../../public/css/jquery.sidr.dark.css">
    <link rel="stylesheet" href="../../public/css/admin.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Favicons
	================================================== -->
    <link rel="shortcut icon" href="../../public/img/favicon.ico">
    <script src="../../public/js/modernizr.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../../public/js/jquery.sidr.min.js"></script>
    <script src="../../public/js/logos.js"></script>
    <script type="text/javascript" src="../../public/js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            language : "es",		
            plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons",
            image_advtab: true,
            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ]
        });
     /*   tinymce.init({
            selector: "textarea"
        }); */
    </script>
</head>
<body>    
<!-- CABECERA -->
	<div id="header">
        <header class="container">
        	<div id="mobile-header" class="sixteen columns">
                <a id="responsive-menu-button" href="#sidr-main">Menu</a>
            </div>
            <div class="thirteen columns">
                <canvas id="swingcalo" width="381" height="122">Actualice su navegador para visualizar correctamente esta web.</canvas>
            	<img src="../../public/img/swingcaloė_logo.png" alt="Swingcaló" title="Swingcaló" width="100%" style="margin:0 auto" />
            </div>
            <nav class="three columns">
                <h5>Bienvenido <?php echo $_SESSION['user']['login']; ?></h5><a href="../../admin/logout.php"><img src="../../public/img/logouticon.png" width="24" height="24px" alt="cerrar sesión" title="cerrar sesión" /></a>
            </nav>
            <nav id="navigation" class="sixteen columns">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Mi cuenta</a></li>
                </ul>
            </nav>
        </header>
    </div>
<!-- CONTENIDOS -->
    <div class="envoltorio">