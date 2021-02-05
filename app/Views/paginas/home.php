<!-- <section>
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
</section> -->

<!-- <section>
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
</section> -->

<section>
    <div id="homeApresentacao">
        <div id="filtro">
            <div id="acesso">
                <?php if(isset($_SESSION['usuario_id'])): ?>
                    <p id="recepcao">
                        Olá, <b><?= $_SESSION['usuario_nome'] ?></b><br/>
                        <i><?php echo strftime('%A, %d de %B de %Y', strtotime('today')); ?></i>
                    </p>
                <?php else: ?>
                    <p id="recepcao">
                        Olá, seja bem-vindo <b><a href="<?=URL?>/usuarios/login">Login</a></b> / <b><a href="<?=URL?>/usuarios/cadastrar">Cadastre-se</a></b><br/>
                        <i><?php echo strftime('%A, %d de %B de %Y', strtotime('today')); ?></i>
                    </p>
                <?php endif; ?>
            </div>
            <div id="conteudo">
                <h1>Juntos no meio digital</h1>
                <p>Entre em contato com um de nossos especialistas mostre seu projeto, sua ideia. Venha junto conosco para o meio digital. Ganhe mais visibilidade com um layout pensado e otimizado para te trazer melhores resultados, ganhe engajamento e rankeamento em pesquisas do Google.</p>
                <div id="botao">
                    <button>Saiba Mais</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div id="homeServicos">
        <div id="servicos">
            <h2>Encante sua audiência com um conteúdo que proporcione experiências</h2>
            <p>Crie conteúdo que cause impacto, atinja seu publico alvo com publicações que tragam relevância. Criamos para sua empresa um sistema otimizado, que ira auxiliar no crescimento do seu negocio.</p>
        </div>
        <div id="itens">
            <div id="bloco">
                <img src="<?=URL?>/public/img/ux-e-design.png" alt="<?=APP_NOME?>">
                <div id="descricao">
                    <h2>UX e Design</h2>
                    <p>Criação e desenvolvimento de aplicações web profissionais e responsivas.</p>
                </div>
            </div>
            <div id="bloco">
                <img src="<?=URL?>/public/img/criacao-e-design.png" alt="<?=APP_NOME?>">
                <div id="descricao">
                    <h2>Criação & Design</h2>
                    <p>Desenvolvemos sua marca, com logotipos, banners, cartões de visitas etc.</p>
                </div>
            </div>
            <div id="bloco">
                <img src="<?=URL?>/public/img/inbound-marketing.png" alt="<?=APP_NOME?>">
                <div id="descricao">
                    <h2>Inbound Marketing</h2>
                    <p>Gestão e planejamento para aproximar e engajar seu publico alvo.</p>
                </div>
            </div>
            <div id="bloco">
                <img src="<?=URL?>/public/img/estrategias-digitais.png" alt="<?=APP_NOME?>">
                <div id="descricao">
                    <h2>Estratégia Digital</h2>
                    <p>Criamos um planejamento e um estudo para impulsionar sua empresa.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div id="homeLayouts">
        <div id="homeProdutos">
            <img src="<?=URL?>/public/img/layout-resposivo.png" alt="<?=APP_NOME?>">
            <div id="descricao">
                <h2>Layouts responsivos para todos os dispositivos</h2>
                <p>Atraia a atenção de seus clientes com um site otimizado de fácil navegação e com um conteúdo de qualidade.</p>
                <div id="botao">
                    <button>Fale Conosco</button>
                </div>
            </div>
        </div>
        <div id="hrHome">
            <hr />
        </div>
        <div id="homeContato">
            <div id="descricao">
                <h2>Trabalhe com conteúdo de impacto</h2>
                <p>Seja mais assertivo em seus serviços, atraia seu publico alvo com indexação no Google. Trabalhe seu conteúdo para criar engajamento e obter melhores resultados em pesquisas. Mantenha seu site sempre ativo, crie postagens para aumentar a relevância de seu conteúdo.</p>
                <div id="botao">
                    <button>Saiba Mais</button>
                </div>
            </div>
            <img src="<?=URL?>/public/img/indexacao-google.jpg" alt="<?=APP_NOME?>">
        </div>
    </div>
</section>