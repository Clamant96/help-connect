<?php 

require 'conexao.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
    
    require_once 'UsuarioClass.php';
    $u = new Usuario();

    //ACESSAR o conteudo de nome do perfil -> UsuarioClass.php
    $listLogged = $u->logged($_SESSION['idUser']);
    $nomeUser = $listLogged['nome'];

    //ACESSAR o email de nome do perfil -> UsuarioClass.php
    $listloggedEmail = $u->loggedEmail($_SESSION['idUser']);
    $emailUser = $listloggedEmail['email'];

    //ACESSAR a situacao de nome do perfil -> UsuarioClass.php
    $listloggedStatus = $u->loggedStatus($_SESSION['idUser']);
    $situacaolUser = $listloggedStatus['situacao'];

}else{
    header("Location: login.php");

}

?>