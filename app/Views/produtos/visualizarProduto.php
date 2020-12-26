<section>
    <div id="exibir">
        <div id="produto">
            <div id="informacao">
                <h1>Facilite seu dia com <b>solucoes inteligentes.</b></h1>
            </div>
            <div id="exibirProduto">
                <div id="conteudoProduto">
                    <div id="dadosProduto">
                        <div id="dadosImg">
                            <div id="marcaProduto">
                                <p>
                                    <img src="<?=URL?>/public/img/logoSite.png">
                                </p>
                                <p>Avaliações 0</p>
                            </div>
                            <div id="hr">
                                <hr />
                            </div>
                            <div id="nome">
                                <p>
                                <?= $dados['produto']->nome ?>
                                </p>
                            </div>
                            <div id="img">
                                <img src="<?= URL.'/public/img/'.$dados['produto']->img ?>">
                            </div>
                        </div>
                        <div id="descricao">
                            <h1>Descrição do Produto</h1>
                            <div id="hr">
                                <hr />
                            </div>
                            <p><?= $dados['produto']->descricao ?></p>
                        </div>
                    </div>
                    <div id="precoProduto">
                        <div id="desenvolvedor">
                            <p>Vendido e Desenvolvido por: <b>Help Connect</b></p>
                        </div>
                        <div id="disponibilidade">
                            <p>Disponibilidade</p>
                            <h2>Entrega em 7 dias uteis</h2>
                        </div>
                        <div id="hr">
                            <hr />
                        </div>
                        <div id="botoes">
                            <div id="comprar">
                                <a href="#">
                                    <div id="icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                        </svg>
                                    </div>
                                    <p>Comprar</p>
                                </a>
                            </div>
                        </div>
                        <div id="botoes">
                            <div id="listaDesejos">
                                <a href="#">
                                    <div id="icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                    </div>
                                    <p>Lista de Desenjos</p>
                                </a>
                            </div>
                        </div>
                        <div id="hr2">
                            <hr />
                        </div>
                        <div id="botaoParcelas">
                            <div id="juros">
                                <div id="parcelas">
                                    <a>
                                        <div id="pagamento">
                                            12x
                                        </div>
                                        <p>
                                            <?php $total = $dados['produto']->preco / 12;?>
                                            <b>
                                                R$ <?= number_format($total, 2, ',', '') ?>
                                            </b>
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <h1>R$ <?= number_format($dados['produto']->preco, 2, ',', '') ?></h1>
                        </div>
                        <div id="preco">
                            <div id="parcelas">
                                <?php 
                                    for($contador = 1; $contador <= 12; $contador++) {
                                        $total = $dados['produto']->preco / $contador;
                                        echo "<p>". $contador ." x R$ " . number_format($total, 2, ',', '') ." sem juros </p>";

                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>