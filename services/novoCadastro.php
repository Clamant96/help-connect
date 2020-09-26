<?php
 
$mysqli = new mysqli("fdb22.awardspace.net","3486769_cadastro","Edkaike1","3486769_cadastro");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$usuario = $_POST["nome"]; 
$senha   = $_POST["senha"]; 
$email   = $_POST["email"];
$status  = 1;

$sql = "INSERT INTO usuario (nome, email, senha, situacao) VALUES ('$usuario', '$email', '$senha', '$status')"; 

$mysqli -> query($sql);

$mysqli -> close();

header('Location: login.php');
 
?>