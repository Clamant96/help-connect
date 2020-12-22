<section>
    <div id="telaCadastro">
        <div id="logo">
            <div id="imagem">
                <img src="<?=URL?>/public/img/logoSite.png" alt="Help Connect">
                <p>Seja Bem-Vindo</p>
            </div>
        </div>
        <form id="form" action="<?=URL?>/usuarios/login" method="POST">
            <div id="container">
                <?=Sessao::mensagem('usuario')?>
                <div id="email">
                    <p>E-mail <b>*</b></p>
                    <input type="text" name="email" placeholder="E-mail" value="<?=$dados['email']?>" id="<?= $dados['preencha_email'] ? 'invalido' : '' ?>" />
                    <div id="textoFeedback" class="<?= $dados['preencha_email'] ? 'feedback' : 'none' ?>">
                        <?= $dados['preencha_email'] ?>
                    </div>
                </div>
                <div id="senha">
                    <p>Senha <b>*</b></p>
                    <input type="password" name="senha" placeholder="Senha" value="<?=$dados['senha']?>" id="<?= $dados['preencha_senha'] ? 'invalido' : '' ?>" />
                    <div id="textoFeedback" class="<?= $dados['preencha_senha'] ? 'feedback' : 'none' ?>">
                        <?= $dados['preencha_senha'] ?>
                    </div>
                </div>
                <div id="botoes">
                    <div id="avancar">
                        <button type="submit">
                            <div id="icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                                </svg>
                            </div>
                            <p>Login</p>
                        </button>
                    </div>
                    <div id="login">
                        <a href="<?=URL?>/usuarios/cadastrar">Ainda nao tem cadastro? <b>Cadastre-se</b></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>