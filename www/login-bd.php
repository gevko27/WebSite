<?php
require 'ligacaoBD.php';
session_start();

$userN = $_POST['userN'];
$pwd = $_POST['password'];
//$pwds = sha1($pwd);
echo "username é $userN";
$sql = "SELECT nomeUtilizador, nomeProprio, palavraChave, role FROM utilizadores WHERE nomeUtilizador='$userN' AND palavraChave ='$pwd'";


$result = $conn->query($sql);
if($result->num_rows == 1)
{
$_SESSION['username'] = $userN;
$_SESSION['password'] = $pwd;

header('location:sessao-decisao.php');
}
else{
	unset ($_SESSION['username']);
	unset ($_SESSION['password']);
	header('location:login.php');

	
	}

	
	$conn->close();

?>