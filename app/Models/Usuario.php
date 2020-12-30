<?php

class Usuario {
    private $db;

    public function __construct() {
        $this->db = new Database();

    }

    public function checarEmail($email) {
        $this->db->query("SELECT email FROM tb_clientes WHERE email = :email");
        
        $this->db->bind(":email", $email);

        if($this->db->resultado()):
            return true;
        else:
            return false;
        endif;
    
    }

    public function armazenar($dados) {
        $this->db->query("INSERT INTO tb_clientes(nome, email, senha) VALUES (:nome, :email, :senha)");
        
        $this->db->bind("nome", $dados['nome']);
        $this->db->bind("email", $dados['email']);
        $this->db->bind("senha", $dados['senha']);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

    public function atualizar($dados) {
        $this->db->query("UPDATE tb_clientes SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
        
        $this->db->bind("id", $dados['id']);
        $this->db->bind("nome", $dados['nome']);
        $this->db->bind("email", $dados['email']);
        $this->db->bind("senha", $dados['senha']);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

    public function validarLogin($email, $senha) {
        $this->db->query("SELECT * FROM tb_clientes WHERE email = :email");

        $this->db->bind(":email", $email);

        //essa funcao resultao se encontra na pasta Libraries/Database.php
        if($this->db->resultado()):
            
            $resultado = $this->db->resultado();

            if(password_verify($senha, $resultado->senha)):
                return $resultado;
            else:
                return false;
            endif;
        else:
            return false;
        endif;
    }

    public function lerUsuarioPorId($id) {
        $this->db->query("SELECT * FROM tb_clientes WHERE id = :id");
        $this->db->bind('id', $id);

        return $this->db->resultado();
    }

    public function excluirConta($id) {
        $this->db->query("DELETE FROM tb_clientes WHERE id = :id");
        
        $this->db->bind("id", $id);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

    public function listarUsuarios() {
        $this->db->query("SELECT * FROM tb_clientes");
        
        return $this->db->resultados();
    }

}