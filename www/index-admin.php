<?php 
require 'ligacaoBD.php';
session_start();
require 'verificar-sessao-admin.php';
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Restaurante X</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
  <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="css/slider.css" rel="stylesheet" type="text/css"  media="all" />
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
  <script type="text/javascript" src="js/camera.min.js"></script>
  <script type="text/javascript" src="js/jquery.lightbox.js"></script> 
  <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen" />
	  <script type="text/javascript">
		  $(function() {
			$('.gallery a').lightBox();
		  });
	  </script>
	 <script type="text/javascript">
			   jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					pagination: false,
				});
			});
	 </script>
 </head>
  <body>
	
	 <div class="header">
	     <div class="wrap">
			<div class="top-header">
				<div class="logo">
				<!--aqui colocar o logo do restaurante-->
					<a href="index.php"><img src="images/logo.png" title="logo" /></a>
				</div>
				<div class="social-icons">
					<ul>
					<!--colocar aqui as paginas do restaurante-->
						<li><a href="#"><img src="images/facebook.png" title="facebook"  /></a></li>
						<li><a href="#"><img src="images/twitter.png" title="twitter" /></a></li>
						<li><a href="#"><img src="images/google.png" title="google pluse" /></a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					<ul>
						<li class="active"><a href="index-admin.php">Home</a></li>
						<li><a href="sobre-nos-admin.php">Sobre nós</a></li>
						<li><a href="servicos-admin.php">Serviços</a></li>
						<li><a href="contactos-admin.php">Contactos</a></li>
						
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="top-nav-right">
					<form>
						<input type="text"><input type="submit" value="" />
					</form>
				</div>
				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>
	</div>
   <!----End-header----->
	       <!--start-image-slider---->
			    <div class="slider">					     
					<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">									    <!---aqui colocar as imagens dos pratos/restaurante-->
						<div data-src="images/slider1.jpg">  </div> 
						<div data-src="images/slider2.jpg">  </div>
						<div data-src="images/slider3.jpg">  </div>
						<div data-src="images/slider4.jpg">  </div>
					</div>
					<div class="clear"> </div>					       
			</div>					
         <!--End-image-slider---->
		 <!---start-content---->
		 <div class="content">
		 	<div class="top-grids">
		 		<div class="wrap">
			 		<div class="top-grid">
			 			<a href="#"><img src="images/icon1.png" title="icon-name"></a>
			 			<h3>A nossa história</h3>
			 			<p>Texto </p>
			 			<a class="button" href="sobre-nos-admin.php">Ler mais</a>
			 		</div>
			 		<div class="top-grid">
			 			<a href="#"><img src="images/icon2.png" title="icon-name"></a>
			 			<h3>Nossos serviços</h3>
			 			<p>Texto </p>
			 			<a class="button" href="servicos-admin.php">Ler mais</a>
			 		</div>
			 		<div class="top-grid last-topgrid">
			 			<a href="#"><img src="images/icon3.png" title="icon-name"></a>
			 			<h3>Localização</h3>
			 			<p>Texto </p>
			 			<a class="button" href="contactos.-adminphp">Read More</a>
			 		</div>
			 		<div class="clear"> </div>
		 		</div>
		 	</div>
		 	<div class="mid-grid">
		 		<div class="wrap">
			 		<h1>Bem-vindos ao nosso Site!</h1>
			 		
			 		<p>Texto</p>
			 		
		 		</div>
		 	</div>
		 	<div class="bottom-grids">
							<div class="wrap">
								<div class="bottom-grid1">
									<h3>Titulo de texto</h3>
									
									TEXTO
								</div>
								<div class="bottom-grid2 bottom-mid">
									<h3>Titulo de texto</h3>
									
									<p>TEXTO</p>
																
								 </div>
							
							</div>
							<div class="bottom-grid1 bottom-last">
									<h3>Titulo TExto</h3>
									
									<p>Texto</p>
								
							
								</div>
								<div class="clear"> </div>
							</div>
							<div class="clear"> </div>
	<!--end-wrap--->
	 </div>
		 </div>
		 <!---End-content---->
		 <!---start-footer---->
		 <div class="footer">
		<div class="wrap">
			<div class="footer-grid">
				<h3>TEXTO</h3>
				
			</div>
			<div class="footer-grid center-grid">
				<h3>TEXTO</h3>
			</div>
			<div class="footer-grid twitts">
				<h3>TEXTO</h3>
				
			</div>
			<div class="footer-grid">
				<h3>TEXTO</h3>
			
			</div>
			<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
	</div>
	<div class="copy-right">
		<div class="top-to-page">
						<a href="#top" class="scroll"> </a>
						<div class="clear"> </div>
					</div>
		<p> © Empresa X. Todos os direitos reservados 2018| Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
	</div>
		 <!---End-footer---->
	</body>
</html>

