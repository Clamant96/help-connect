<?php 

require 'services/verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Connect</title>
    <script type="text/javascript">
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
    </script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleIconPerfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <!-- SideBar -->
    <header id="menu">
        <nav>
            <!--<div id="perfil">
                <label id="nomeUsuario"><?php echo $nomeUser; ?></label>
                <p id="logout">
                    <a href="services/logout.php">Sair</a>

                </p>
                
            </div>-->

            <ul>
                <li id="active">Inicio</li>
                <li><a href="#blocoslayouts">Layouts</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#conteudoFooter">Contatos</a></li>

            </ul>

        </nav>

        <div id="copyright">Copyright &copy; 2020</div>

    </header>

    <!-- Conteudo -->
    <div id="container">
        <section id="conteudo">
            <header id="barraMenu">
                <svg id="botaoMenu" viewBox="0 0 100 80" width="30" height="30">
                    <rect id="imagem1" y="0" />
                    <rect id="imagem2" y="30" />
                    <rect id="imagem3" y="60" />
                    
                </svg>

                <input type="text" placeholder="Pesquisar" />

                <div id="login">
                    <!--<a href="services/login.php">
                        <img src="img/profile-user.svg">

                    </a>-->

                    <div class="dropdown" style="float:right;">
                        <img src="img/profile-user.svg">
                        
                        <div class="dropdown-content">
                            <div id="dadosUsuario">
                                <h1><?php echo $nomeUser; ?></h1>
                                <p><?php echo $emailUser; ?></p>
                            
                            </div>
                            <hr />
                            <div id="opcoesUsuario">
                                <a href="services/login.php"><i class="fa fa-power-off"></i></a>
                                <?php 
                                    if($situacaolUser == 2){
                                        echo "<a href=\"services\login.php\">Gerenciar</a>";

                                    }else{
                                        
                                    }
                                
                                ?>
                            
                            </div>
                        </div>
                    </div>

                </div>

            </header>

        </section>

        <section id="conteudoServicos">
            <div id="textoServicos">
                <h1>Desenvolvimento Front end</h1>
                <p>Realizamos o desenvolvimento de seu site, com base em suas ideias. Entre em contato e faca uma contacao conosto.</p>

            </div>

            <div id="imgSericos">
                <img src="img/imgservices.png" alt="img_services">
            
            </div>
        
        </section>

        <section id="conteudoLayouts">
            <div id="blocoslayouts">
                <div id="imgLayouts">
                    <img src="img/layout_teste.jpg" >

                    <div id="textoLayouts">
                        <h1>Titulo teste</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, culpa fuga? Vero dignissimos illum distinctio fugiat, maxime, praesentium harum, beatae cupiditate quas aspernatur accusamus rerum molestias! Magnam natus consequatur omnis!</p>
                    
                    </div>
                
                </div>

            </div>

            <div id="blocoslayouts">
                <div id="imgLayouts">
                    <img src="img/layout_teste.jpg" >

                    <div id="textoLayouts">
                        <h1>Titulo teste</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, culpa fuga? Vero dignissimos illum distinctio fugiat, maxime, praesentium harum, beatae cupiditate quas aspernatur accusamus rerum molestias! Magnam natus consequatur omnis!</p>
                    
                    </div>
                
                </div>

            </div>

            <div id="blocoslayouts">
                <div id="imgLayouts">
                    <img src="img/layout_teste.jpg" >

                    <div id="textoLayouts">
                        <h1>Titulo teste</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, culpa fuga? Vero dignissimos illum distinctio fugiat, maxime, praesentium harum, beatae cupiditate quas aspernatur accusamus rerum molestias! Magnam natus consequatur omnis!</p>
                    
                    </div>
                
                </div>

            </div>

        </section>

        <section id="conteudoLayouts">
            <div id="blocoslayouts">
                <div id="imgLayouts">
                    <img src="img/layout_teste.jpg" >

                    <div id="textoLayouts">
                        <h1>Titulo teste</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, culpa fuga? Vero dignissimos illum distinctio fugiat, maxime, praesentium harum, beatae cupiditate quas aspernatur accusamus rerum molestias! Magnam natus consequatur omnis!</p>
                    
                    </div>
                
                </div>

            </div>

            <div id="blocoslayouts">
                <div id="imgLayouts">
                    <img src="img/layout_teste.jpg" >

                    <div id="textoLayouts">
                        <h1>Titulo teste</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, culpa fuga? Vero dignissimos illum distinctio fugiat, maxime, praesentium harum, beatae cupiditate quas aspernatur accusamus rerum molestias! Magnam natus consequatur omnis!</p>
                    
                    </div>
                
                </div>

            </div>

            <div id="blocoslayouts">
                <div id="imgLayouts">
                    <img src="img/layout_teste.jpg" >

                    <div id="textoLayouts">
                        <h1>Titulo teste</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, culpa fuga? Vero dignissimos illum distinctio fugiat, maxime, praesentium harum, beatae cupiditate quas aspernatur accusamus rerum molestias! Magnam natus consequatur omnis!</p>
                    
                    </div>
                
                </div>

            </div>

        </section>

        <!-- LOCALIDADE -->

        <div id="containerLocalildade">
            <h1>Localidade</h1>
            <section id="conteudoLocalidade">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.5371945121356!2d-46.74736508507254!3d-23.549142567026124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5601cc0edf29%3A0xc2c6dbc78f2aa3db!2sAv.%20Miguel%20Frias%20e%20Vasconcelos%2C%201200%20-%20Jaguar%C3%A9%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005345-000!5e0!3m2!1spt-BR!2sbr!4v1601043539527!5m2!1spt-BR!2sbr" width="1600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
            </section>
        
        </div>

        <!-- CONTATENOS -->

        <div id="containerFormulario">
            <section id="conteudoFormulario">
                <form id="formulario" action="#" method="POST">
                    <div id="texto">
                        <p>Fale conosco</p>
                        <textarea name="texto" id="textArea" cols="30" rows="10" placeholder="" ></textarea>
                        
                    </div>

                    <div id="email">
                        <p>E-mail</p>

                        <div id="enviar">
                            <input type="email" name="email" placeholder="E-mail" />
                            <button type="submit">Enviar</button> 

                        </div>
                        
                    </div>
            
                </form>

            </section>

        </div>

        <!-- FOOTER -->

        <div id="containerFooter">
            <footer id="conteudoFooter">
                <div id="conteudoLogo">
                    <img src="img/logoSite.png" alt="Logo Help Connect">
                    <p>Todos juntos no meio digital</p>
                </div>

                <div id="dadosFooter">
                    <div id="conteudoMenu">
                        <ul>
                            <li>Inicio</li>
                            <li><!--Fazer Ancoramento-->Layouts</li>
                            <li>Sobre</li>
                            <li>Contatos</li>
            
                        </ul>

                    </div>

                    <div id="conteudoContatos">
                        <ul>
                            <li>HELP CONNECT</li>
                            <li>kevin.helpconnect@gmail.com</li>
                            <li>(11) 9-7222-8292</li>
            
                        </ul>

                    </div>
                </div>

            </footer>

        </div>

    </div>
    
    <script src="js/javascript.js"></script>

</body>
</html>

<?php 

else: header("Location: services/login.php"); endif;

?>