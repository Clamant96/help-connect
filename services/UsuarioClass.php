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

            $_SESSION['idUser'] = $dado['idusuario'];

            return true;

        }else{
            return false;

        }

    }

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

}

?>