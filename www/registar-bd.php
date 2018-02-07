<?php

require 'ligacaoBD.php';
$roleUser = "user";
$nomeUser = $_POST["userN"];
$mailUser = $_POST["enderecoEmail"];
$numeroUser = $_POST["numeroTelemovel"];
$sqlVer = "SELECT nomeUtilizador,eMail, numeroTelemovel from utilizadores where nomeUtilizador='$nomeUser' OR 
eMail='$mailUser' OR numeroTelemovel='$numeroUser'";

$result = $conn->query($sqlVer);
if ($result->num_rows > 0) 
{
	header('location:registo-negado.php');
}
else
{
$codigoA = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90));


$sql = "INSERT into utilizadores(nomeUtilizador,nomeProprio,palavraChave,role,eMail,numeroTelemovel,codigoAtivacao) 
VALUES ('$_POST[userN]', '$_POST[primeiroNome]', '$_POST[password]','$roleUser','$_POST[enderecoEmail]','$_POST[numeroTelemovel]','$codigoA')";
if ($conn->query($sql) == TRUE)
{
header('location:registo-sucesso.php');

}
else
{

header('location:registo-negado.php');
}
}
?>