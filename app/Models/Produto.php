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

    public function lerProdutoPorId($id) {
        $this->db->query("SELECT * FROM tb_produtos WHERE id = :id");
        $this->db->bind('id', $id);

        return $this->db->resultado();
    }

}