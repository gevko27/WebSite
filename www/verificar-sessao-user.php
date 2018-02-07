<?php 
require 'ligacaoBD.php';
$user = $_SESSION['username'];

$roleUser = "user";


$sql = "SELECT role FROM utilizadores WHERE nomeUtilizador = '$user'";
$result = $conn->query($sql);
if ($result->num_rows == 1) 
{
	while($row = $result->fetch_assoc())
	{
		if($roleUser==$row["role"])
		{
			echo "";
		}
		else
		{
			header('location:index.php');
		}
		}
	}
	else{
		header('location:index.php');
	}
?>