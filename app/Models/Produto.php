<?php

class Produto {
    private $db;

    public function __construct() {
        $this->db = new Database();

    }

    public function listarProdutos() {
        $this->db->query("SELECT * FROM tb_produtos");
        
        return $this->db->resultados();
    }

    public function urlProduto($urlProduto) {
        /*$this->db->query("SELECT * FROM tb_produtos WHERE id = :id");
        $this->db->bind('id', $id);*/
        $this->db->query("SELECT * FROM tb_produtos WHERE urlProduto = :urlProduto");
        $this->db->bind('urlProduto', $urlProduto); 

        return $this->db->resultado();
    }

    public function lerProdutoPorId($id) {
        /*$this->db->query("SELECT * FROM tb_produtos WHERE id = :id");
        $this->db->bind('id', $id);*/
        $this->db->query("SELECT * FROM tb_produtos WHERE id = :id");
        $this->db->bind('id', $id); 

        return $this->db->resultado();
    }

    public function checarNome($nome) {
        $this->db->query("SELECT nome FROM tb_produtos WHERE nome = :nome");
        
        $this->db->bind(":nome", $nome);

        if($this->db->resultado()):
            return true;
        else:
            return false;
        endif;
    
    }

    public function armazenar($dados) {
        $this->db->query("INSERT INTO tb_produtos(nome, descricao, preco, img, urlProduto) VALUES (:nome, :descricao, :preco, :img, :urlProduto)");
        
        $this->db->bind("nome", $dados['nome']);
        $this->db->bind("descricao", $dados['descricao']);
        $this->db->bind("preco", $dados['preco']);
        $this->db->bind("img", $dados['img']);
        $this->db->bind("urlProduto", $dados['urlProduto']);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

    public function atualizar($dados) {
        $this->db->query("UPDATE tb_produtos SET nome = :nome, descricao = :descricao, preco = :preco, img = :img, urlProduto = :urlProduto WHERE id = :id");
        
        $this->db->bind("id", $dados['id']);
        $this->db->bind("nome", $dados['nome']);
        $this->db->bind("descricao", $dados['descricao']);
        $this->db->bind("preco", $dados['preco']);
        $this->db->bind("img", $dados['img']);
        $this->db->bind("urlProduto", $dados['urlProduto']);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

    public function excluirProduto($id) {
        $this->db->query("DELETE FROM tb_produtos WHERE id = :id");
        
        $this->db->bind("id", $id);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

}