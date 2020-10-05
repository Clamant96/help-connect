<?php
// abre conexao com o banco 
require_once 'conectarBanco.php';

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];

//echo "Valores recebidos". $nome ." ". $descricao ." ". $preco;

//monta sql para o banco de dados ,
$sql = "INSERT  INTO produto (nome, descricao, preco) VALUES ('" . $nome . "','" . $descricao . "','" . $preco . "')";

//echo "Valores atualizados na planilha";

$mysqli->query($sql);

$mysqli->close();

header('Location: listandoProdutos.php');
