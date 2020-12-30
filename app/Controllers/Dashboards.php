<?php

class Dashboards extends Controller {

    public function __construct() {
        //$this->postModel = $this->model('Dashboard');
        $this->postModel = $this->model('Post');
        $this->produtoModel = $this->model('Produto');
        $this->usuarioModel = $this->model('Usuario');
    }

    public function painelProduto() {
        $dados = [
            'produtos' => $this->produtoModel->listarProdutos(),
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('dashboard/painelProduto', $dados);
    }

    public function painelMensagem() {
        $dados = [
            'produtos' => $this->produtoModel->listarProdutos(),
            'usuarios' => $this->usuarioModel->listarUsuarios(),
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('dashboard/painelMensagem', $dados);
    }

    public function painelCliente() {
        $dados = [
            'produtos' => $this->produtoModel->listarProdutos(),
            'usuarios' => $this->usuarioModel->listarUsuarios(),
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('dashboard/painelCliente', $dados);
    }

    public function adicionarProdutos() {
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
                        Url::redirecionar('paginas/painelProduto/'.$_SESSION['usuario_id']);
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
    }

    public function editarCliente($id) {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'id' => $id,
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha'])
            ];

            if(in_array('', $formulario)):

                if(empty($formulario['nome'])):
                    $dados['preencha_nome'] = 'Preencha o campo <b>Nome</b>';
                else:
                    $dados['preencha_nome'] = ''; 
                endif;

                if(empty($formulario['email'])):
                    $dados['preencha_email'] = 'Preencha o campo <b>E-mail</b>';
                else:
                    $dados['preencha_email'] = ''; 
                endif;

                if(empty($formulario['senha'])):
                    $dados['preencha_senha'] = 'Preencha o campo <b>Senha</b><br>A senha deve ter no minimo 6 caracteres';
                else:
                    $dados['preencha_senha'] = ''; 
                endif;

            else:
                if(Checa::checarNome($formulario['nome'])):
                    $dados['preencha_nome'] = 'O nome informado e invalido';

                elseif(Checa::checarEmail($formulario['email'])):
                    $dados['preencha_email'] = 'O email informado e invalido';

                elseif(strlen($formulario['senha']) < 6):
                    $dados['preencha_senha'] = 'A senha deve ter no minimo 6 caracteres';

                else:
                    $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);
                    
                    if($this->usuarioModel->atualizar($dados)):
                        Sessao::mensagem('usuario', 'Dados alterados com sucesso');
                        Url::redirecionar('dashboards/painelCliente');
                    else:
                        die("Erro ao armazenar usuario no banco de dados");

                    endif;
                
                endif;
                
            endif;

            /*var_dump($formulario);*/
        else:
            $alterar = $this->usuarioModel->lerUsuarioPorId($id);

            $dados = [
                'id' => $alterar->id,
                'nome' => $alterar->nome,
                'email' => $alterar->email,
                'senha' => $alterar->senha,
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_senha' => ''
            ];
            
        endif;

        $this->view('dashboard/editarPerfil', $dados);
    }

}