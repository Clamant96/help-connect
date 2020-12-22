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
    </div>
</section>

<?php if($dados['post']->usuario_id == $_SESSION['usuario_id']):?>
    <!-- <a href="<?= URL.'/posts/editar/'.$dados['post']->id?>">Editar</a> -->
<?php endif?>
