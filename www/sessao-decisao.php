<?php
require 'ligacaoBD.php';
session_start();

$roleAdmin = "admin";
$roleUser = "user";

$user = $_SESSION['username'];

$sql = "SELECT role FROM utilizadores WHERE nomeUtilizador = '$user'";
$result = $conn->query($sql);
if ($result->num_rows == 1) 
{
	while($row = $result->fetch_assoc())
	{
		if($roleAdmin==$row["role"])
		{
			header('location:index-admin.php');
		}
		elseif($roleUser==$row["role"])
		{
			header('location:verificar-confirmacao.php');
			
		}
}
}
$conn->close();
?>