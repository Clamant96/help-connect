<?php 

require 'conexao.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
    
    require_once 'UsuarioClass.php';
    $u = new Usuario();

    $listLogged = $u->logged($_SESSION['idUser']);

    $nomeUser = $listLogged['nome'];

}else{
    header("Location: login.php");

}

?>