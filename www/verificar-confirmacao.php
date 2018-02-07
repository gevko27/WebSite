<?php

require 'ligacaoBD.php';
session_start();

$user = $_SESSION['username'];
$codigoAtivacao = "verificado";
$sql = "SELECT codigoAtivacao FROM utilizadores WHERE nomeUtilizador = '$user'";

$result = $conn->query($sql);
if ($result->num_rows == 1) 
{
	while($row = $result->fetch_assoc())
	{
		if($codigoAtivacao==$row["codigoAtivacao"])
		{
			header('location:index-user.php');
		}
		else
		{
			header('location:index-user-confirmacao.php');
			
		}
}
}

$conn->close();

?>