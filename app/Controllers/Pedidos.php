<?php

class Pedidos extends Controller {
    
    public function __construct() {
        //$this->pedidoModel = $this->model('Pedido');
        $this->usuarioModel = $this->model('Usuario');
    }

    public function painelVizualizarPedidos($id) {

        $dados = [
            'usuario' => $this->usuarioModel->lerUsuarioPorId($id)
        ];

        $this->view('pedidos/listarPedidos', $dados);
    }

}