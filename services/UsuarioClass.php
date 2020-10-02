<?php 

class Usuario{
    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            //engloba todos os elementos de um perfil dentro de idusuario, apos isso e so destrinxar o codigo
            $_SESSION['idUser'] = $dado['idusuario'];

            return true;

        }else{
            return false;

        }

    }

    //ACESSAR o nome de cada perfil -> verificar.php
    public function logged($id){
        global $pdo;

        $array = array();
        
        $sql = "SELECT nome FROM usuario WHERE idusuario = :idusuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idusuario", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();

        }

        return $array;

    }

    //ACESSAR o email de cada perfil -> verificar.php
    public function loggedEmail($email){
        global $pdo;

        $array = array();

        $sql = "SELECT email FROM usuario WHERE idusuario = :idusuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idusuario", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();

        }

        return $array;

    }

    //ACESSAR a situacao de cada perfil -> verificar.php
    public function loggedStatus($situacao){
        global $pdo;

        $array = array();

        $sql = "SELECT situacao FROM usuario WHERE idusuario = :idusuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idusuario", $situacao);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();

        }

        return $array;

    }

}

?>