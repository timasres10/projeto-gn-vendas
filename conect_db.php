<?php
//acessa ao banco de dados
$servername = "localhost";
$database = "gn_vendas";
$username = "root";
$password = "";
// Create connection
$mysqli = new mysqli("localhost","$username","$password","$database");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>