<?php

class Posts extends Controller {
    
    public function __construct() {
        //se nao tiver usuario ID logado, sera redirecionado para a pagina de login
        if(Sessao::usuarioLogado()):
            Url::redirecionar('usuarios/login');
        endif;

        $this->postModel = $this->model('Post');
        $this->usuarioModel = $this->model('Usuario');
    }

    public function listar() {
        $dados = [
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('posts/index', $dados);
    }

    /*public function cadastrar() {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'email' => $_SESSION['usuario_email'],
                'usuario_id' => $_SESSION['usuario_id'],
                'titulo' => trim($formulario['titulo']),
                'texto' => trim($formulario['texto'])
            ];

            if(in_array('', $formulario)):

                if(empty($formulario['titulo'])):
                    $dados['preencha_titulo'] = 'Preencha o campo <b>Titulo</b>';
                else:
                    $dados['preencha_titulo'] = ''; 
                endif;

                if(empty($formulario['texto'])):
                    $dados['preencha_texto'] = 'Preencha o campo <b>Texto</b>';
                else:
                    $dados['preencha_texto'] = ''; 
                endif;

            else:
                if($this->postModel->armazenar($dados)):
                    Sessao::mensagem('post', 'Mensagem cadastrada com sucesso');
                    Url::redirecionar('posts/listar');

                else:
                    die("Erro ao armazenar a mensagem no banco de dados");

                endif;

            endif;

        else:
            $dados = [
                'titulo' => '',
                'texto' => '',
                'preencha_titulo' => '',
                'preencha_texto' => ''
            ];
            
        endif;

        //var_dump($formulario);

        $this->view('posts/cadastrar', $dados);
    }*/

    public function cadastrar() {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'email' => $_SESSION['usuario_email'],
                'usuario_id' => $_SESSION['usuario_id'],
                'titulo' => trim($formulario['titulo']),
                'texto' => trim($formulario['texto'])
            ];

            if(in_array('', $formulario)):

                if(empty($formulario['titulo'])):
                    $dados['preencha_titulo'] = 'Preencha o campo <b>Titulo</b>';
                else:
                    $dados['preencha_titulo'] = ''; 
                endif;

                if(empty($formulario['texto'])):
                    $dados['preencha_texto'] = 'Preencha o campo <b>Texto</b>';
                else:
                    $dados['preencha_texto'] = ''; 
                endif;

            else:
                if($this->postModel->armazenar($dados)):
                    Sessao::mensagem('post', 'Mensagem cadastrada com sucesso');
                    Url::redirecionar('posts/painelVizualizarMensagens');

                else:
                    die("Erro ao armazenar a mensagem no banco de dados");

                endif;

            endif;

        else:
            $dados = [
                'titulo' => '',
                'texto' => '',
                'preencha_titulo' => '',
                'preencha_texto' => ''
            ];
            
        endif;

        //var_dump($formulario);

        $this->view('posts/cadastrar', $dados);
    }

    public function vizualizarItem($id) {
        $post = $this->postModel->lerPostPorId($id);
        $usuario = $this->usuarioModel->lerUsuarioPorId($post->usuario_id);

        $dados = [
            'post' => $post,
            'usuario' => $usuario
        ];

        $this->view('posts/ver', $dados);
    }

    public function painelVizualizarMensagens() {
        $dados = [
            'usuarios' => $this->usuarioModel->listarUsuarios(),
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('posts/ver', $dados);
    }

    public function editar($id) {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'id' => $id,
                'titulo' => trim($formulario['titulo']),
                'texto' => trim($formulario['texto'])
            ];

            if(in_array('', $formulario)):

                if(empty($formulario['titulo'])):
                    $dados['preencha_titulo'] = 'Preencha o campo <b>Titulo</b>';
                else:
                    $dados['preencha_titulo'] = ''; 
                endif;

                if(empty($formulario['texto'])):
                    $dados['preencha_texto'] = 'Preencha o campo <b>Texto</b>';
                else:
                    $dados['preencha_texto'] = ''; 
                endif;

            else:
                if($this->postModel->atualizar($dados)):
                    Sessao::mensagem('post', 'Mensagem editada com sucesso');
                    //Url::redirecionar('posts/listar'); /*VERIFICAR PARA ONDE ESTA INDO*/
                    Url::redirecionar('posts/painelVizualizarMensagens');

                else:
                    die("Erro ao editar a mensagem");

                endif;

            endif;

        else:
            $post = $this->postModel->lerPostPorId($id);
            
            if($post->usuario_id != $_SESSION['usuario_id']):
                Sessao::mensagem('post', 'Voce nao tem autorizacao para editar essa mensagem');
                Url::redirecionar('posts/listar');

            endif;

            $dados = [
                'id' => $post->id,
                'titulo' => $post->titulo,
                'texto' => $post->texto,
                'preencha_titulo' => '',
                'preencha_texto' => ''
            ];
            
        endif;

        //var_dump($formulario);

        $this->view('posts/editar', $dados);
    }

    public function excluir($id) {
        /*CONVERTENDO VALORES*/
        //ESSA E UMA FORMA DE VALIDACAO OPCIONAL, EM PRODUTOS ESTA A FORMA PADRAO, NESSA ESTA CONVERTENDO UMA STRING EM INT
        $id = (int) $id;

        if(is_int($id)):
            if($this->postModel->excluirMensagem($id)):
                Sessao::mensagem('post', 'Mensagem excluida com sucesso');
                Url::redirecionar('posts/painelVizualizarMensagens');
            else:
                die("Erro ao excluir a mensagem");
            endif;
        endif;

        var_dump($id);

    }
    
}