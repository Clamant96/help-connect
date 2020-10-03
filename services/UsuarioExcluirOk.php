<?php
// abre conexao com o banco 
require_once 'conectarBanco.php';

$id = $_GET["id"];

$sql = "DELETE FROM usuario WHERE idusuario = " . $id;

$mysqli->query($sql);

$mysqli->close();

header('Location: listandoItens.php');

?>
