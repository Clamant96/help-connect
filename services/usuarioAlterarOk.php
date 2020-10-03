<?php
// abre conexao com o banco 
require_once 'conectarBanco.php';

echo "Acessou o UPDATE";

$id = $_POST["idusuario"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

//echo "Passou os valores para as variaveis do UPDATE";

//echo " ID: ". $id . " Nome: ". $nome ." Email: ". $email ." Senha: ". $senha;

//monta sql para o banco de dados ,
$sql = "UPDATE usuario SET nome = '" . $nome . "', email = '" . $email . "',senha ='" . $senha . "' WHERE idusuario = " . $id;

$mysqli->query($sql);
$mysqli->close();

header('Location: listandoItens.php');
