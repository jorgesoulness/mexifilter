<?php
ini_set('display_errors', '1');
$srvr="http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']."/pe_ramen/ramen/maqueta/";//Cambiar path & quitar cuando se haga la integración.
define("CARPETA", $srvr);
?>
<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Maruchan Ramen</title>
        <meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<link rel="alternate" hreflang="es-mx" href="">
		<link rel="canonical" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon" href="<?php echo CARPETA; ?>apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php echo CARPETA; ?>favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo CARPETA; ?>favicon.ico">

        <!-- StylesRamen -->
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/custom-ramen.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/animate.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/hover-min.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/bootstrap.min.css">
        
        <script src="<?php echo CARPETA; ?>js/vendor/modernizr-2.8.3.min.js"></script>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
    
        <header>
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </header><!-- end.Header -->
        
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8" />
    
    <!-- Website Title & Description -->
    <title>Verde - Minimal Coming Soon Template</title>
    <meta name="description" content="Verde - Minimal Coming Soon Template">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo CARPETA; ?>img/favicon/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo CARPETA; ?>img/favicon/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo CARPETA; ?>img/favicon/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo CARPETA; ?>img/favicon/apple-touch-icon-57x57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo CARPETA; ?>img/favicon/favicon.png" />
    
    <!-- Included CSS Files -->
    <link rel="stylesheet" href="<?php echo CARPETA; ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CARPETA; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo CARPETA; ?>css/style5.css">
    <link rel="stylesheet" href="<?php echo CARPETA; ?>css/supersized.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo CARPETA; ?>css/supersized.shutter.css" type="text/css" media="screen" />
    
    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,600,700,800,900,200italic,300italic,400italic' rel='stylesheet' type='text/css'>
    
    <!-- DEMO Switcher
  	================================================== -->
    <link rel="stylesheet" href="../styleswitcher/css/styleswitcher.css" /> 
    
</head>
<body>
	
	<div id="ut_styleswitcher">
		<div style="position: relative;">
            <a href="#" class="toggle"></a>
            <h1>Version Switcher</h1>
            <p>
     		<a class="button-switcher" href="index.html">Image version</a>
     		<a class="button-switcher" href="index_video.html">Video version</a>
     		<a class="button-switcher" href="index_video2.html">Video version Youtube</a>
     		<a class="button-switcher" href="index_video3.html">Video version Vimeo <span>(with cookies message)</span></a>
     		<a class="button-switcher" href="index_canvas.html">Abstract version</a>
     		</p>
            <p class="info">This Panel is only for demo purposes! </p>
        </div>
    </div>
	
	<!-- Loader -->
	<div id="loading">
    	<img src="<?php echo CARPETA; ?>img/loader.gif" alt="Website Loader"/>
    </div>
  