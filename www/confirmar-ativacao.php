<?php

require 'ligacaoBD.php';
session_start();
$codigo = $_POST["codigo"];
$nomeUser = $_SESSION["username"];
$verificado = "verificado";

$sql = "SELECT codigoAtivacao FROM utilizadores WHERE nomeUtilizador='$nomeUser'";

$result = $conn->query($sql);
if ($result->num_rows == 1) 
{
	while($row = $result->fetch_assoc())
	{
	if($codigo==$row["codigoAtivacao"])
	{
		$sqlAlterar = "UPDATE utilizadores SET codigoAtivacao = '$verificado' WHERE nomeUtilizador='$nomeUser'";
		if ($conn->query($sqlAlterar) == TRUE)
		{

		header('location:index-user.php');

	}
}
	else
	{
		header('location:index-user-confirmacao.php');
	}
}
}

?>