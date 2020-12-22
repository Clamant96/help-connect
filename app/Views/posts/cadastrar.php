<section>
    <div id="pergunta">
        <form action="<?=URL?>/posts/cadastrar" method="POST">
            <div id="texto">
                <p>Fale conosco</p>
                <textarea type="text" name="texto" cols="30" rows="10" placeholder="Digite aqui..." value="<?=$dados['texto']?>" id="<?= $dados['preencha_texto'] ? 'invalido' : '' ?>" ></textarea>
                <div id="textoFeedback" class="<?= $dados['preencha_texto'] ? 'feedback' : 'none' ?>">
                    <?= $dados['preencha_texto'] ?>
                </div>
            </div>
            <div id="titulo">
                <p>Titulo</p>
                <div id="enviar">
                    <input type="text" name="titulo" placeholder="Titulo" value="<?=$dados['titulo']?>" id="<?= $dados['preencha_titulo'] ? 'invalido' : '' ?>" />
                    <button type="submit">Enviar</button>
                </div>
                <div id="textoFeedback" class="<?= $dados['preencha_titulo'] ? 'feedback' : 'none' ?>">
                    <?= $dados['preencha_titulo'] ?>
                </div>
            </div>
        </form>
    </div>
</section>