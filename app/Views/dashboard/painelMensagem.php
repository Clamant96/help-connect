<section>
    <div id="dashboard">
        <div id="perfil">
            <div id="gerenciarPerfil">
                <div id="menu">
                    <!-- DADOS PERFIL CAMPO MENU -->
                    <div id="dadosLogin">
                        <div id="img">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                        </div>
                        <div id="nome">
                            <p><?= $_SESSION['usuario_nome'] ?></p>
                        </div>
                        <div id="email">
                            <p><?= $_SESSION['usuario_email'] ?></p>
                        </div>
                    </div>
                    <div id="botoes">
                        <div id="comprar">
                            <a href="<?= URL.'/usuarios/vizualizarPerfil/'.$_SESSION['usuario_id'] ?>">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                                    </svg>
                                </div>
                                <div id="hr">
                                    <hr />
                                </div>
                                <p>Perfil</p>
                            </a>
                        </div>
                        <div id="comprar">
                            <a href="<?= URL ?>/dashboards/painelProduto">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                </div>
                                <div id="hr">
                                    <hr />
                                </div>
                                <p>Gerenciar Produtos</p>
                            </a>
                        </div>
                        <!-- <div id="comprar">
                            <a href="<?=URL?>/paginas/adicionarProdutos">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                </div>
                                <div id="hr">
                                    <hr />
                                </div>
                                <p>Adicionar Produto</p>
                            </a>
                        </div> -->
                        <!-- <div id="comprar">
                            <a href="<?=URL.'/paginas/painelCliente/'.$_SESSION['usuario_id'] ?>">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                                    </svg>
                                </div>
                                <div id="hr">
                                    <hr />
                                </div>
                                <p>Clientes</p>
                            </a>
                        </div> -->
                        <!-- <div id="comprar">
                            <a href="<?=URL.'/paginas/painelMensagem/'.$_SESSION['usuario_id'] ?>">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                                    </svg>
                                </div>
                                <div id="hr">
                                    <hr />
                                </div>
                                <p>Mensagens</p>
                            </a>
                        </div> -->
                    </div>
                    <div id="atendimento">
                        <h1>Atendimento ao Cliente</h1>
                        <p>kevin.helpconnect@gmail.com</p>
                    </div>
                </div>
                <div id="dadosDashboard">
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
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>