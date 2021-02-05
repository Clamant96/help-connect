<?php

class Paginas extends Controller {

    public function __construct() {
        $this->postModel = $this->model('Post');
        $this->produtoModel = $this->model('Produto');
        $this->usuarioModel = $this->model('Usuario');
    }

    public function index() {
        $dados = [
            'titulo' => 'Pagina Inicial',
            'descricao' => 'Criacao de site em modelo MVC',
            'posts' => $this->postModel->listarPosts(),
            'produtos' => $this->produtoModel->listarProdutos()
        ];

        $this->view('paginas/home', $dados);
    }

    public function layouts() {
        $dados = [
            'titulo' => 'Pagina Inicial',
            'descricao' => 'Criacao de site em modelo MVC',
            'posts' => $this->postModel->listarPosts(),
            'produtos' => $this->produtoModel->listarProdutos()
        ];

        $this->view('paginas/layouts', $dados);
    }

    public function sobre() {
        $dados = [
            'tituloPaginas' => 'Sobre Nos'
        ];
        
        $this->view('paginas/sobre', $dados);
    }

    /*DASHBOARD*/

    /*public function painelProduto($id) {
        $dados = [
            'produtos' => $this->produtoModel->listarProdutos(),
            'usuario' => $this->usuarioModel->lerUsuarioPorId($id),
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('dashboard/painelProduto', $dados);
    }*/

    /*public function painelMensagem($id) {
        $dados = [
            'produtos' => $this->produtoModel->listarProdutos(),
            'usuario' => $this->usuarioModel->lerUsuarioPorId($id),
            'usuarios' => $this->usuarioModel->listarUsuarios(),
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('dashboard/painelMensagem', $dados);
    }*/

    /*public function painelCliente($id) {
        $dados = [
            'produtos' => $this->produtoModel->listarProdutos(),
            'usuario' => $this->usuarioModel->lerUsuarioPorId($id),
            'usuarios' => $this->usuarioModel->listarUsuarios(),
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('dashboard/painelCliente', $dados);
    }*/

    /*public function adicionarProdutos() {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'descricao' => trim($formulario['descricao']),
                'preco' => trim($formulario['preco']),
                'img' => trim($formulario['img']),
                'urlProduto' => trim($formulario['urlProduto'])
            ];

            if(in_array('', $formulario)):

                if(empty($formulario['nome'])):
                    $dados['preencha_nome'] = 'Preencha o campo <b>Nome</b>';
                else:
                    $dados['preencha_nome'] = '';  
                endif;

                if(empty($formulario['descricao'])):
                    $dados['preencha_descricao'] = 'Preencha o campo <b>Descricao</b>';
                else:
                    $dados['preencha_descricao'] = '';
                endif;

                if(empty($formulario['preco'])):
                    $dados['preencha_preco'] = 'Preencha o campo <b>Preco</b>';
                else:
                    $dados['preencha_preco'] = '';
                endif;

                if(empty($formulario['img'])):
                    $dados['preencha_img'] = 'Preencha o campo <b>Imagem</b>';
                else:
                    $dados['preencha_img'] = '';
                endif;

                if(empty($formulario['urlProduto'])):
                    $dados['preencha_urlProduto'] = 'Preencha o campo <b>URL</b>';
                else:
                    $dados['preencha_urlProduto'] = '';
                endif;

            else:
                if($this->produtoModel->checarNome($formulario['nome'])):
                    $dados['preencha_email'] = 'O Produto informado ja se encontra cadastrado';

                else:
                    if($this->produtoModel->armazenar($dados)):
                        Sessao::mensagem('produto', 'Produto adicionado com sucesso');
                        Url::redirecionar('paginas/painelProduto/71');
                    else:
                        die("Erro ao armazenar usuario no banco de dados");

                    endif;
                
                endif;
                
            endif;

            var_dump($formulario);
        else:
            $dados = [
                'nome' => '',
                'descricao' => '',
                'preco' => '',
                'img' => '',
                'urlProduto' => '',
                'preencha_nome' => '',
                'preencha_descricao' => '',
                'preencha_preco' => '',
                'preencha_img' => '',
                'preencha_urlProduto' => ''
            ];
            
        endif;

        $this->view('produtos/adicionarProdutos', $dados);
    }*/

}