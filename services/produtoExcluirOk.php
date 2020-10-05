<?php
// abre conexao com o banco 
require_once 'conectarBanco.php';

$id = $_GET["id"];

$sql = "DELETE FROM produto WHERE idproduto = " . $id;

$mysqli->query($sql);

$mysqli->close();

header('Location: listandoProdutos.php');

?>
