<?php
// abre conexao com o banco 
require_once 'conectarBanco.php';

$id = $_POST["idusuario"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "UPDATE usuario SET nome = '" . $nome . "', email = '" . $email . "',senha ='" . $senha . "' WHERE idusuario = " . $id;

$mysqli->query($sql);
$mysqli->close();

header("Location: listandoItens.php");
