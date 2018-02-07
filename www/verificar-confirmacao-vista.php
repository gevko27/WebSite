<?php

require 'ligacaoBD.php';


$user = $_SESSION['username'];
$codigoAtivacao = "verificado";

$sql = "SELECT codigoAtivacao FROM utilizadores WHERE nomeUtilizador = '$user'";
$result = $conn->query($sql);
if ($result->num_rows == 1) 
{
	while($row = $result->fetch_assoc())
	{
		if($codigoAtivacao==$row["codigoAtivacao"]){

		}
		else
		{
			header('location:index-user-confirmacao.php');
		}
	}
}
?>
