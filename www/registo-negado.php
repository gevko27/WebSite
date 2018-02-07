<?php 
require 'ligacaoBD.php';
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
					<li><a href="index.php">Home</a></li>
						<li><a href="sobre-nos.php">Sobre nós</a></li>
						<li><a href="servicos.php">Serviços</a></li>
						<li><a href="contactos.php">Contactos</a></li>
						<li  class="active"><a href="login.php">Login</a></li>
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
		 	<!---start-about---->
		 	<div class="about-us">
		 			<div class="wrap">
						<div>
						<h4>Já existe um utilizador existente com os dados que inseriu!
</h4><br>
							<h3>Registo</h3><br>
							<div class="clear"> </div>

	<form action="registar-bd.php" method="post">
	
	  
	
		<div>
		<input name="primeiroNome" type="text"  placeholder="Primeiro nome" required maxlength="256" />
				
				<div></div>
		  <input name="userN" type="text" placeholder="Nome de utilizador" required maxlength="256"/>
		  <div></div>
		<input name="password" type="password"  placeholder="Palavra chave" required />
				<div></div>
				<input name="enderecoEmail" type="text"  placeholder="E-Mail" required maxlength="256"/>
				<div></div>
			<input name="numeroTelemovel" type="text"  placeholder="Contacto telefónico" required maxlength="256"/>
			<div></div>


	  </div>

		<div>
		<input type="submit" name="submit2" value="Registar" class="button" />
	
		</div>

		
  
	</form>

						</div>
						<div>
						
							
						</div>
					
					
		 	<!---End-about---->
		 </div>
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
				
				<span>TEXTO</span>
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

