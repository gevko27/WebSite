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
 </head>
  <body>

	 <div class="header">
	     <div class="wrap">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div>
				<div class="social-icons">
					<ul>
						<li><a href="#"><img src="images/facebook.png" title="facebook" /></a></li>
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
						<li><a href="index-admin.php">Home</a></li>
						<li><a href="sobre-nos-admin.php">Sobre nós</a></li>
						<li><a href="servicos-admin.php">Serviços</a></li>
						<li class="active"><a href="contactos-admin.php">Contactos</a></li>
						
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
		 <!---start-content---->
		 <div class="content">
		 	<!---start-contact---->
		 	<div class="contact">
		 		<div class="wrap">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		
      				</div>
      			<div class="company_address">
				     	<h3>Informação :</h3>
						    	<p>TEXTO</p>
						   		
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contacte nós</h3>
					    
				    </div>
  				</div>				
			  </div>
			</div>
			</div>
		 	<!---End-contact---->
		 <!---End-content---->
		 <!---start-footer---->
		 <div class="footer">
		<div class="wrap">
			<div class="footer-grid">
				<h3>TEXTO</h3>
				<p>TEXTO</p>
				
			</div>
			<div class="footer-grid center-grid">
				<h3>TEXTO</h3>
				
			</div>
			<div class="footer-grid twitts">
				<h3>TEXTO</h3>
				
			</div>
			<div class="footer-grid">
				<h3>TEXTO</h3>
				<p>TEXTO</p>
				
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
		<p> © Empresa X. Todos os direitos reservados 2018| Design by <a href="http://w3layouts.com/"> W3layouts</a>
	</div>
		 <!---End-footer---->
	</body>
</html>

