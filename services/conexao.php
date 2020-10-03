<?php 

session_start();

$localhost = "fdb22.awardspace.net";
$user = "3486769_cadastro";
$pass = "Edkaike1";
$bancoDeDados = "3486769_cadastro";

/*$localhost = "localhost";
$user = "root";
$pass = "";
$bancoDeDados = "cadastro";*/

// SISTEMAS
/*$sql = $pdo->query("SELECT * FROM usuario");
$sql->execute();

echo "Existem ". $sql->rowCount() ." resgitros de cadastro";*/

global $pdo;

try{
    // BANCO ORIENTADO A OBJETO - PDO
    $pdo = new PDO("mysql:dbname=".$bancoDeDados."; host=".$localhost, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: ". $e->getMessage();
    exit;

}

?>