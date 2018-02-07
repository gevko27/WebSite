<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurante_bd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// Check connection
if ($conn->connect_error) {
    die("Conexão Falhada: " . $conn->connect_error);
}


?>