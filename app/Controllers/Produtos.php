<?php

class Produtos extends Controller {
    
    public function __construct() {
        $this->produtoModel = $this->model('Produto');
    }

    public function vizualizarProduto($id) {

        $dados = [
            'produto' => $this->produtoModel->lerProdutoPorId($id)
        ];

        $this->view('produtos/visualizarProduto', $dados);
    }

}