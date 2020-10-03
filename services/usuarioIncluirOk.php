<?php
// abre conexao com o banco 
require_once 'conectarBanco.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$situacao = $_POST["situacao"];

//monta sql para o banco de dados
$sql = "INSERT  INTO usuario (nome,email,senha,situacao) VALUES ('" . $nome . "','" . $email . "','" . $senha . "','". $situacao ."')";

$mysqli->query($sql);
// echo "New record has id: " . $mysqli -> insert_id;
$mysqli->close();

header("Location: listandoItens.php");
