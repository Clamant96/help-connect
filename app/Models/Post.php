<?php

class Post {
    private $db;

    public function __construct() {
        $this->db = new Database();

    }

    public function listarPosts() {
        $this->db->query("SELECT *,
        tb_mensagem.id          as      postId,
        tb_mensagem.criado_em   as      postDataCadastro,
        tb_clientes.id          as      usuarioID,
        tb_clientes.criado_em   as      usuarioDataCadastro

        FROM tb_mensagem
        INNER JOIN tb_clientes ON

        tb_mensagem.usuario_id = tb_clientes.id

        ORDER BY tb_mensagem.id DESC

        ");
        
        return $this->db->resultados();
    }

    public function armazenar($dados) {
        $this->db->query("INSERT INTO tb_mensagem (usuario_id, titulo, texto, email) VALUES (:usuario_id, :titulo, :texto, :email)");
        
        $this->db->bind("usuario_id", $dados['usuario_id']);
        $this->db->bind("titulo", $dados['titulo']);
        $this->db->bind("texto", $dados['texto']);
        $this->db->bind("email", $dados['email']);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

    public function lerPostPorId($id) {
        $this->db->query("SELECT * FROM tb_mensagem WHERE id = :id");
        $this->db->bind('id', $id);

        return $this->db->resultado();
    }

    public function atualizar($dados) {
        $this->db->query("UPDATE tb_mensagem SET titulo = :titulo, texto = :texto WHERE id = :id");
        
        $this->db->bind("id", $dados['id']);
        $this->db->bind("titulo", $dados['titulo']);
        $this->db->bind("texto", $dados['texto']);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

    public function excluirMensagem($id) {
        $this->db->query("DELETE FROM tb_mensagem WHERE id = :id");
        
        $this->db->bind("id", $id);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

}