<?= Sessao::mensagem('post') ?>

<section>
    <!-- <div id="mensagem">
        <?php foreach($dados['posts'] as $post): ?>
            <div id="autor">
                <p id="email"><b>Autor:</b> <?= $post->email ?></p>
                <p id="data"><?= FormatacaoData::conversorDia($post->postDataCadastro) ?></p>
            </div>
            <div id="conteudo">
                <p id="titulo"><b>Titulo:</b> <?= $post->titulo ?></p>
                <p id="texto"><?= $post->texto ?></p>
                <div id="avancar">
                    <a href="<?= URL.'/posts/vizualizarItem/'.$post->postId ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M5.172 10.828a.5.5 0 0 0 .707 0l4.096-4.096V9.5a.5.5 0 1 0 1 0V5.525a.5.5 0 0 0-.5-.5H6.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
                        </svg>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
        <div id="botao">
            <a href="<?=URL?>/posts/cadastrar">Enviar</a>
        </div>
    </div> -->

    <div id="posts">
        <div id="mensagem">
                <?php foreach($dados['posts'] as $post): ?>
                    <div id="post">
                        <div id="autorPost">
                            <h1><?= $post->titulo ?>
                                <p id="data">
                                    <?= FormatacaoData::conversorDia($post->postDataCadastro) ?>
                                    por: <?= $post->nome ?>
                                </p>
                                <p id="texto"><?= $post->texto ?></p>
                            </h1>
                            <!-- <div id="avancar">
                                <a href="<?= URL.'/posts/vizualizarItem/'.$post->postId ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path fill-rule="evenodd" d="M5.172 10.828a.5.5 0 0 0 .707 0l4.096-4.096V9.5a.5.5 0 1 0 1 0V5.525a.5.5 0 0 0-.5-.5H6.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
                                    </svg>
                                </a>
                            </div> -->
                        </div>
                    </div>
                <?php endforeach ?>
            <div id="botao">
                <a href="<?=URL?>/posts/cadastrar">Enviar</a>
            </div>
        </div>
    </div>
</section>