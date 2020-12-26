<section>
    <div id="exibirPerfil">
        <div id="perfil">
            <div id="informacao">
                <h1>Facilite seu dia com <b>solucoes inteligentes.</b></h1>
            </div>
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
                            <p><?= $dados['usuario']->nome ?></p>
                        </div>
                        <div id="email">
                            <p><?= $dados['usuario']->email ?></p>
                        </div>
                    </div>
                    <div id="botoes">
                        <div id="comprar">
                            <a href="<?= URL.'/usuarios/vizualizarPerfil/71' ?>">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                </div>
                                <div id="hr">
                                    <hr />
                                </div>
                                <p>Meu Cadastro</p>
                            </a>
                        </div>
                        <div id="comprar">
                            <a href="<?= URL.'/usuarios/vizualizarPedidos/71' ?>">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                                    </svg>
                                </div>
                                <div id="hr">
                                    <hr />
                                </div>
                                <p>Pedidos</p>
                            </a>
                        </div>
                    </div>
                    <div id="atendimento">
                        <h1>Atendimento ao Cliente</h1>
                        <p>kevin.helpconnect@gmail.com</p>
                    </div>
                </div>
                <div id="dados">
                    <div id="minhaConta">
                        <h1>Minha Conta</h1>
                        <h2>Administre seus dados, endereco e pedidos.</h2>
                        <p>Se houver duvidas, entre em contato com nossa central de atendimento</p>
                    </div>
                    <div id="dadosCadastrais">
                        <h1>Dados Cadastrais</h1>
                        <h2>Todos os campos sao obrigatorios</h2>
                    </div>
                    <div id="painel">
                        <div id="opcao">
                            <p>Dados Pessoais</p>
                        </div>
                        <div id="dadosPerfil">
                            <div id="cadastro">
                                <div id="nome">
                                    <p>Nome</p>
                                    <input type="text" name="nome" placeholder="Nome" value="<?=$dados['usuario']->nome?>" />
                                </div>
                                <div id="email">
                                    <p>E-mail</p>
                                    <input type="text" name="email" placeholder="E-mail" value="<?=$dados['usuario']->email?>" />
                                </div>
                                <div id="cpfRg">
                                    <div id="cpf">
                                        <p>CPF</p>
                                        <input type="text" name="email" placeholder="CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" />
                                    </div>
                                    <div id="rg">
                                        <p>RG</p>
                                        <input type="text" name="email" placeholder="RG" />
                                    </div>
                                </div>
                                <div id="celIdade">
                                    <div id="cel">
                                        <p>CEL</p>
                                        <input type="tel" name="email" placeholder="Cel" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" />
                                    </div>
                                    <div id="idade">
                                        <p>Data Nascimento</p>
                                        <input type="date" name="email" placeholder="Data Nascimento" />
                                    </div>
                                </div>
                                <div id="senha">
                                    <p>Senha</p>
                                    <input type="password" name="senha" placeholder="Senha" value="<?=$dados['usuario']->senha?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <?php include '../app/Views/usuarios/dadosPessoais.php'; ?> -->
            </div>
        </div>
    </div>
</section>