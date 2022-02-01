<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "culturis";

$conexao = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
}

?>