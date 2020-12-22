<section>
    <div id="conteudo">
        <?php if(isset($_SESSION['usuario_id'])): ?>
            <p id="recepcao">
                Olá, <b><?= $_SESSION['usuario_nome'] ?></b><br/>
                <i><?php echo strftime('%A, %d de %B de %Y', strtotime('today')); ?></i>
            </p>
        <?php else: ?>
            <p id="recepcao">
                Olá, seja bem-vindo. <b><a href="<?=URL?>/usuarios/login">Login</a></b> / <b><a href="<?=URL?>/usuarios/cadastrar">Cadastre-se</a></b><br/>
                <i><?php echo strftime('%A, %d de %B de %Y', strtotime('today')); ?></i>
            </p>
        <?php endif; ?>
    </div>
</section>

<section>
    <div id="conteudo">
        <div id="apresentacao">
            <h1>Desenvolvimento Front end</h1>
            <p>Realizamos o desenvolvimento de seu site, com base em suas ideias. Entre em contato e faca uma contacao conosto.</p>
            <div id="botao">
                <a href="#">
                    <div id="button">Saiba Mais</div>
                </a>
            </div>
        </div>
        <div id="img">
            <img src="<?=URL?>/public/img/imgservices.png" alt="<?=APP_NOME?>">
        </div>
    </div>
</section>

<section>
    <div id="produtos">
        <?php
            /*foreach($this->view->dados as $indice => $produto) {
                echo "
                    <div id=\"card\">
                        <a href='/exibirProduto?id=" . $produto["id"] . "'>
                            <div id=\"img\">
                                <img src=\"img/". $produto["img"] ."\">
                            </div>
                        </a>

                        <button class=\"collapsible\">Saiba Mais</button>
                        <div class=\"content\">
                            <div id=\"produto\">
                                <h1 id=\"h1\">"
                                    . $produto["nome"] .
                                "</h1>
                                <p id=\"p\">"
                                    . $produto["descricao"] .
                                "</p>
                                <h2 id=\"h2\">R$ "
                                    . $produto["preco"] .
                                "</h2>
                            </div>
                        </div>
                    </div>
                ";
            }*/
        ?>

        <?php foreach($dados['produtos'] as $produto): ?>
            <div id="card">
                <a href="<?= URL.'/produtos/vizualizarProduto/'.$produto->id ?>">
                    <div id="img">
                        <img src="<?= URL.'/public/img/'.$produto->img ?>" alt="<?=APP_NOME?>">
                    </div>
                </a>

                <button class="collapsible">Saiba Mais</button>
                <div class="content">
                    <div id="produto">
                        <h1 id="h1"><?= $produto->nome ?></h1>
                        <p id="p"><?= $produto->descricao ?></p>
                        <h2 id="h2">R$ <?= $produto->preco ?></h2>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</section>

<section>
    <div id="localidade">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.5371945121356!2d-46.74736508507254!3d-23.549142567026124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5601cc0edf29%3A0xc2c6dbc78f2aa3db!2sAv.%20Miguel%20Frias%20e%20Vasconcelos%2C%201200%20-%20Jaguar%C3%A9%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005345-000!5e0!3m2!1spt-BR!2sbr!4v1606159675930!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>

<section>
    <div id="posts">
        <div id="mensagem">
            <?php foreach($dados['posts'] as $post): ?>
                <div id="post">
                    <div id="autorPost">
                        <div id="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                                <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                            </svg>
                        </div>
                        <h1><?= $post->titulo ?>
                            <p id="data">
                                <?= FormatacaoData::conversorDia($post->postDataCadastro) ?>
                                por: <?= $post->nome ?>
                            </p>
                        </h1>
                        <div id="avancar">
                            <a href="<?= URL.'/posts/vizualizarItem/'.$post->postId ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path fill-rule="evenodd" d="M5.172 10.828a.5.5 0 0 0 .707 0l4.096-4.096V9.5a.5.5 0 1 0 1 0V5.525a.5.5 0 0 0-.5-.5H6.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>