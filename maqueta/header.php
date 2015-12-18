<?php
ini_set('display_errors', '1');
$srvr="http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']."/pvmexifilter/maqueta/";//Cambiar path & quitar cuando se haga la integración.
define("CARPETA", $srvr);
?>
<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mexifilter</title> 
        <meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<link rel="alternate" hreflang="es-mx" href="">
		<link rel="canonical" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

        <link rel="apple-touch-icon" href="<?php echo CARPETA; ?>apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php echo CARPETA; ?>favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo CARPETA; ?>favicon.ico">

        <!-- StylesRamen -->
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/custom-mexifilter.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/animate.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/hover-min.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>js/plugins/stylesheets/superslides.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/jquery.bxslider.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/collage/transitions.css">
        
        <script src="<?php echo CARPETA; ?>js/vendor/modernizr-2.8.3.min.js"></script>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
	    <header id="headMenu" class="viewHead">
	  		<div class="container-fluid">
		  		<div class="row">
			  		<div data-wow-delay="0.2s" class="col-xs-3 col-sm-3 col-md-2 logo wow bounceIn">
				  		<h1><a href="<?php echo CARPETA; ?>"><img src="<?php echo CARPETA; ?>img/Logop.png" alt="Mexifilter"></a></h1>
			  		</div><!-- end.Logo -->
			  		<div data-wow-delay="0.4s"  class="col-xs-8 col-sm-8 col-md-9 hidden-xs wow fadeInDown">
			  			<div class="searchCont">
					  		<form method="get" name="buscaForm" id="buscaForm" action="/search" class="search-form">
						  		<input type="text" id="search-form" name="q" placeholder="Buscar..." required/>
						  		<button type="submit" value="search"><i class="fa fa-search"></i></button>
					  		</form>
				  		</div><!-- end.Search -->
			  		</div><!-- end.Menu -->
			  		<div class="col-xs-9 col-sm-1 col-md-1" >
				  		<a id="openMenuMobile" class="open--menu"><i class="fa fa-bars"></i></a><!-- end.openMenu -->
			  		</div>
		  		</div>
	  		</div>
  		</header><!-- end.LogoMenuSearch -->
	    
	    <section id="MenuMobileContent" class="menu--content">
		    <div class="container-fluid">
			    <div class="row">
				    <div class="col-md-12">
			            <nav>
			               <div class="close-cont">
			                   <a class="CloseMenu"><i class="fa fa-close"></i></a>
			               </div>
			               <h3>Menú</h3>
			               <ul>
			                   <li><a href="<?php echo CARPETA; ?>nostros/">Nosotros</a></li>
			                   <li><a href="<?php echo CARPETA; ?>productos/">Productos</a></li>
			                   <li><a href="<?php echo CARPETA; ?>servicios/">Servicios</a></li>
			                   <li><a href="<?php echo CARPETA; ?>galeria/">Galería</a></li>
			                   <li><a href="<?php echo CARPETA; ?>contacto/">Contacto</a></li>
			               </ul>
			            </nav>
				    </div>
				    <div class="col-md-12">
			            <h3 class="visible-xs">Buscar</h3>
			            <div class="searchCont visible-xs">
							<form method="get" name="buscaForm" id="buscaForm" action="/search" class="search-form">
								<input type="text" id="search-form" name="q" placeholder="Buscar..." required/>
								<button type="submit" value="search"><i class="fa fa-search"></i></button>
							</form>
						</div><!-- end.Search -->
			    	</div>
			    	<div class="clear"></div>
			    	<div class="col-md-12">
		            	<h3 class="visible-xs">Síguenos</h3>
			            <div class="socialesMobile visible-xs">
			                <a class="fb" href="" target="_blank"><i class="fa fa-facebook"></i></a>
			                <a class="tw" href="" target="_blank"><i class="fa fa-twitter"></i></a>
			                <a class="yt" href="" target="_blank"><i class="fa fa-youtube"></i></a>
			            </div>
			    	</div>
			    </div>
		    </div>
        </section><!-- end.NavegacionSitioMobile -->
        
        <div id="cont3D" class="no_efectoTresde">
  