<?php

class Produtos extends Controller {
    
    public function __construct() {
        $this->produtoModel = $this->model('Produto');
    }

    public function vizualizarProduto($urlProduto) {

        $dados = [
            'produto' => $this->produtoModel->urlProduto($urlProduto)
        ];

        $this->view('produtos/visualizarProduto', $dados);
    }

    public function listar() {
        $dados = [
            'produtos' => $this->produtoModel->listarProdutos()
        ];

        $this->view('produtos/listarProdutos', $dados);
    }

    public function cadastrar() {
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
                        Sessao::mensagem('produto', 'Cadastro realizado com sucesso');
                        Url::redirecionar('produtos/listar');
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

        $this->view('produtos/cadastrarProduto', $dados);
    }

    public function editar($id) {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'id' => $id,
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
                if($this->produtoModel->atualizar($dados)):
                    Sessao::mensagem('produto', 'Produto editado com sucesso');
                    //Url::redirecionar('posts/listar'); /*VERIFICAR PARA ONDE ESTA INDO*/
                    Url::redirecionar('produtos/listar');

                else:
                    die("Erro ao editar o produto");

                endif;

            endif;

        else:
            $produto = $this->produtoModel->lerProdutoPorId($id);

            $dados = [
                'id' => $produto->id,
                'nome' => $produto->nome,
                'descricao' => $produto->descricao,
                'preco' => $produto->preco,
                'img' => $produto->img,
                'urlProduto' => $produto->urlProduto,
                'preencha_nome' => '',
                'preencha_descricao' => '',
                'preencha_preco' => '',
                'preencha_img' => '',
                'preencha_urlProduto' => ''
            ];
            
        endif;

        var_dump($formulario);

        $this->view('produtos/editarProdutos', $dados);
    }

    public function excluir($id) {
        if($this->produtoModel->excluirProduto($id)):
            Sessao::mensagem('produto', 'Produto excluido com sucesso');
            Url::redirecionar('produtos/listar');
        else:
            die("Erro ao excluir o produto");
        endif;

    }

}