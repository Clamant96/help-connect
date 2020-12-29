<section>
    <div id="produtos">
        <!-- <?php foreach($dados['produtos'] as $produto): ?>
            <div id="card">
                <a href="<?= URL.'/produtos/vizualizarProduto/'.$produto->urlProduto ?>">
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
                    <div id="opcoes">
                        <div id="botoes">
                            <div id="comprar">
                                <a href="<?= URL.'/produtos/editar/'.$produto->id?>">
                                    <div id="icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </div>
                                    <p>Alterar</p>
                                </a>
                            </div>
                        </div>
                        <div id="botoes">
                            <div id="comprar">
                                <a href="#">
                                    <div id="icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </div>
                                    <p>Excluir</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?> -->
        <?php foreach($dados['produtos'] as $produto): ?>
            <div id="card">
                <a href="<?= URL.'/produtos/vizualizarProduto/'.$produto->urlProduto ?>">
                    <div id="img">
                        <img src="<?= URL.'/public/img/'.$produto->img ?>" alt="<?=APP_NOME?>">
                    </div>
                </a>
                <div id="produto">
                    <h1 id="h1"><?= $produto->nome ?></h1>
                    <p id="p"><?= $produto->descricao ?></p>
                    <h2 id="h2">R$ <?= number_format($produto->preco, 2, ',', '') ?></h2>
                    <div id="opcoes">
                        <div id="comprar">
                            <a href="<?= URL.'/produtos/editar/'.$produto->id?>">
                                <div id="icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </div>
                                <p>Alterar</p>
                            </a>
                        </div>
                        <div id="comprar">
                            <a href="<?= URL.'/produtos/excluir/'.$produto->id?>">
                                <div id="icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </div>
                                <p>Excluir</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <div id="card">
            <div id="incluir">
                <div id="opcoes">
                    <div id="botoes">
                        <div id="comprar">
                            <a href="<?=URL?>/produtos/cadastrar">
                                <div id="icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </div>
                                <p>Adicionar Produto</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>