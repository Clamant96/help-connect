<section>
    <div id="telaCadastro">
        <div id="logo">
            <div id="imagem">
                <img src="<?=URL?>/public/img/logoSite.png" alt="Help Connect">
                <p>Seja Bem-Vindo</p>
            </div>
        </div>
        <!-- NAO ESQUECER DE INFORMAR O ID PARA ALTERAR OS DADOS -->
        <form id="form" action="<?=URL?>/produtos/editar/<?= $dados['id'] ?>" method="POST">
            <div id="container">
                <div id="nome">
                    <p>Nome Produto <b>*</b></p>
                    <input type="text" name="nome" placeholder="Nome" value="<?=$dados['nome']?>" id="<?= $dados['preencha_nome'] ? 'invalido' : '' ?>" />
                    <div id="textoFeedback" class="<?= $dados['preencha_nome'] ? 'feedback' : 'none' ?>">
                        <?= $dados['preencha_nome'] ?>
                    </div>
                </div>
                <div id="nome">
                    <p>Descricao <b>*</b></p>
                    <input type="text" name="descricao" placeholder="Descricao" value="<?=$dados['descricao']?>" id="<?= $dados['preencha_descricao'] ? 'invalido' : '' ?>" />
                    <div id="textoFeedback" class="<?= $dados['preencha_descricao'] ? 'feedback' : 'none' ?>">
                        <?= $dados['preencha_descricao'] ?>
                    </div>
                </div>
                <div id="nome">
                    <p>Preco <b>*</b></p>
                    <input type="number" name="preco" placeholder="Preco" value="<?=$dados['preco']?>" id="<?= $dados['preencha_preco'] ? 'invalido' : '' ?>" />
                    <div id="textoFeedback" class="<?= $dados['preencha_preco'] ? 'feedback' : 'none' ?>">
                        <?= $dados['preencha_preco'] ?>
                    </div>
                </div>
                <div id="nome">
                    <p>Imagem <b>*</b></p>
                    <input type="text" name="img" placeholder="Imagem" value="<?=$dados['img']?>" id="<?= $dados['preencha_img'] ? 'invalido' : '' ?>" />
                    <div id="textoFeedback" class="<?= $dados['preencha_img'] ? 'feedback' : 'none' ?>">
                        <?= $dados['preencha_img'] ?>
                    </div>
                </div>
                <div id="nome">
                    <p>URL <b>*</b></p>
                    <input type="text" name="urlProduto" placeholder="URL" value="<?=$dados['urlProduto']?>" id="<?= $dados['preencha_urlProduto'] ? 'invalido' : '' ?>" />
                    <div id="textoFeedback" class="<?= $dados['preencha_urlProduto'] ? 'feedback' : 'none' ?>">
                        <?= $dados['preencha_urlProduto'] ?>
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
                            <p>Alterar</p>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>