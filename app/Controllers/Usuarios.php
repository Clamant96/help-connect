<?php

class Usuarios extends Controller {

    public function __construct() {
        $this->usuarioModel = $this->model('Usuario');
    }

    public function cadastrar() {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
            ];

            if(in_array('', $formulario)):

                if(empty($formulario['nome'])):
                    $dados['preencha_nome'] = 'Preencha o campo <b>Nome</b>';
                endif;

                if(empty($formulario['email'])):
                    $dados['preencha_email'] = 'Preencha o campo <b>E-mail</b>';
                endif;

                if(empty($formulario['senha'])):
                    $dados['preencha_senha'] = 'Preencha o campo <b>Senha</b><br>A senha deve ter no minimo 6 caracteres';
                endif;

                if(empty($formulario['confirmar_senha'])):
                    $dados['preencha_confirmar_senha'] = 'Preencha o campo <b>Senha</b>';
                endif;

            else:
                if(Checa::checarNome($formulario['nome'])):
                    $dados['preencha_nome'] = 'O nome informado e invalido';

                elseif(Checa::checarEmail($formulario['email'])):
                    $dados['preencha_email'] = 'O email informado e invalido';

                //verifica se o email ja existe no banco de dados
                //chama o contrutor Usuarios
                //instancia a classe Usuario
                //compara o $formulario['email'] dentro do metodo checarEmail()
                elseif($this->usuarioModel->checarEmail($formulario['email'])):
                    $dados['preencha_email'] = 'O email informado ja se encontra cadastrado';

                elseif(strlen($formulario['senha']) < 6):
                    $dados['preencha_senha'] = 'A senha deve ter no minimo 6 caracteres';
                
                elseif($formulario['senha'] != $formulario['confirmar_senha']):
                    $dados['preencha_confirmar_senha'] = 'As senhas sao diferentes';

                else:
                    $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);
                    
                    //e aqui que se insere os dados no banco de dados
                    //chama chama o contrutor Usuarios
                    //instancia a classe Usuario
                    //armazena do $dados dentro do metodo armazenar()
                    if($this->usuarioModel->armazenar($dados)):
                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');
                        Url::redirecionar('usuarios/login');
                    else:
                        die("Erro ao armazenar usuario no banco de dados");

                    endif;
                
                endif;
                
            endif;

            /*var_dump($formulario);*/
        else:
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_senha' => '',
                'preencha_confirmar_senha' => ''
            ];
            
        endif;

        $this->view('usuarios/cadastrar', $dados);
    }

    public function login() {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        if(isset($formulario)):
            $dados = [
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha'])
            ];

            if(in_array('', $formulario)):

                if(empty($formulario['email'])):
                    $dados['preencha_email'] = 'Preencha o campo <b>E-mail</b>';
                endif;

                if(empty($formulario['senha'])):
                    $dados['preencha_senha'] = 'Preencha o campo <b>Senha</b><br>A senha deve ter no minimo 6 caracteres';
                endif;

            else:
                if(Checa::checarEmail($formulario['email'])):
                    $dados['preencha_email'] = 'O email informado e invalido';

                elseif(strlen($formulario['senha']) < 6):
                    $dados['preencha_senha'] = 'A senha deve ter no minimo 6 caracteres';

                else:
                    $usuario = $this->usuarioModel->validarLogin($formulario['email'], $formulario['senha']);
                    
                    if($usuario):
                        $this->criarSessaoUsuario($usuario);
                        
                        /*var_dump($usuario);
                        echo '<hr>';*/
                    else:
                        Sessao::mensagem('usuario', 'Usuario ou senha invalidos', 'alertaErro');
                    endif;

                endif;
                
            endif;

            // var_dump($formulario);

        else:
            $dados = [
                'email' => '',
                'senha' => '',
                'preencha_email' => '',
                'preencha_senha' => ''
            ];
            
        endif;

        $this->view('usuarios/login', $dados);
    }

    private function criarSessaoUsuario($usuario) {
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['usuario_nome'] = $usuario->nome;
        $_SESSION['usuario_email'] = $usuario->email;
        $_SESSION['usuario_senha'] = $usuario->senha;

        Url::redirecionar('paginas/home');

    }

    public function logout() {
        unset($_SESSION['usuario_id']);
        unset($_SESSION['usuario_nome']);
        unset($_SESSION['usuario_email']);
        unset($_SESSION['usuario_senha']);

        session_destroy();

        Url::redirecionar('usuarios/login');

    }

}