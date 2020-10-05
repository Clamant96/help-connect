<?php
require_once 'conectarBanco.php';
$id = $_POST["idproduto"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$sql = "UPDATE produto SET nome = '" . $nome . "', descricao = '" . $descricao . "', preco ='" . $preco . "' WHERE idproduto = " . $id;
$mysqli->query($sql);
$mysqli->close();
//header("Location: listandoProdutos.php");
exit(header("Location: listandoProdutos.php"));