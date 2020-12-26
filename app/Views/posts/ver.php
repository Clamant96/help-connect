<section>
    <!-- <div id="mensagem">
        <div id="autor">
            <p id="email"><b>Autor:</b> <?= $dados['usuario']->email ?></p>
            <p id="data"><?= FormatacaoData::conversorDia($dados['post']->criado_em) ?></p>
        </div>
        <div id="conteudo">
            <p id="titulo"><b>Titulo:</b> <?= $dados['post']->titulo ?></p>
            <p id="texto"><?= $dados['post']->texto ?></p>
        </div>
    </div> -->

    <div id="posts">
        <div id="editarPost">
            <ul>
                <a href="<?=URL?>/posts/listar"><li>Mensagens</li></a>
                /
                <li><?= $dados['post']->titulo ?></li>
            </ul>
        </div>
        <div id="mensagem">
            <div id="post">
                <div id="autorPost">
                    <h1><?= $dados['post']->titulo ?>
                        <p>
                            <?= FormatacaoData::conversorDia($dados['post']->criado_em) ?>
                            por: <?= $dados['usuario']->nome ?>
                        </p>
                        <p id="texto"><?= $dados['post']->texto ?></p>
                    </h1>
                </div>
            </div>
        </div>
        <?php if($dados['post']->usuario_id == $_SESSION['usuario_id']):?>
            <div id="botoes">
                <div id="comprar">
                    <a href="<?= URL.'/posts/editar/'.$dados['post']->id?>">
                        <div id="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                            </svg>
                        </div>
                        <p>Editar</p>
                    </a>
                </div>
            </div>
        <?php endif?>
    </div>
</section>