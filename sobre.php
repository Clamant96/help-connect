<?php 

require 'services/verifica.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleIconPerfil.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <style>
        #container #conteudoServicos{
            display: flex;
            align-items: center;
            justify-content: center;

            padding: 2%;
            width: 66%;
            height: auto;

            /*background-color: violet;*/ /*DEBUG*/

        }

        #container #conteudoServicos #textoServicos{
            width: 70%;
            height: auto;
            margin-top: 0%;

            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;

        }

        #container #conteudoServicos #textoServicos h1{
            font-weight: 700;
            font-size: 40px;
            color: var(--text-bold);

            padding: 1%;
            width: 98%;
            height: auto;

        }

        #container #conteudoServicos #textoServicos h2{
            font-weight: 700;
            font-size: 25px;
            color: var(--text-bold);

            padding: 1%;
            width: 98%;
            height: auto;

        }

        #container #conteudoServicos #textoServicos p{
            font-weight: 300;
            font-size: 18px;
            color: var(--text-sample);

            padding: 1%;
            width: 98%;
            height: auto;

        }

        #container #conteudoServicos #textoServicos ul{
            font-weight: 300;
            font-size: 18px;
            color: var(--text-sample);

            padding: 1%;
            width: 98%;
            height: auto;

            list-style: none;

        }

        #container #conteudoServicos #textoServicos ul li{
            width: 100%;
            height: auto;

        }

        @media(min-width: 1024px) {

        }

        @media(min-width: 768px) and (max-width: 1023px){
            #container #conteudoServicos{
                display: flex;
                align-items: center;
                justify-content: center;

                padding: 2%;
                width: 76%;
                height: auto;

                /*background-color: violet;*/ /*DEBUG*/

            }

            #container #conteudoServicos #textoServicos{
                width: 100%;
                height: auto;
                margin-top: 0%;

                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;

            }

            #container #conteudoServicos #textoServicos h1{
                font-weight: 700;
                font-size: 30px;
                color: var(--text-bold);

                padding: 1%;
                width: 98%;
                height: auto;

            }

            #container #conteudoServicos #textoServicos h2{
                font-weight: 700;
                font-size: 20px;
                color: var(--text-bold);

                padding: 1%;
                width: 98%;
                height: auto;

            }

            #container #conteudoServicos #textoServicos p{
                font-weight: 300;
                font-size: 18px;
                color: var(--text-sample);

                padding: 1%;
                width: 98%;
                height: auto;

            }

            #container #conteudoServicos #textoServicos ul{
                font-weight: 300;
                font-size: 18px;
                color: var(--text-sample);

                padding: 1%;
                width: 98%;
                height: auto;

                list-style: none;

            }

            #container #conteudoServicos #textoServicos ul li{
                width: 100%;
                height: auto;

            }

        }

        @media(min-width: 361px) and (max-width: 767px){
            #container #conteudoServicos{
                display: flex;
                align-items: center;
                justify-content: center;

                padding: 2%;
                width: 76%;
                height: auto;

                /*background-color: violet;*/ /*DEBUG*/

            }

            #container #conteudoServicos #textoServicos{
                width: 100%;
                height: auto;
                margin-top: 0%;

                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;

            }

            #container #conteudoServicos #textoServicos h1{
                font-weight: 700;
                font-size: 20px;
                color: var(--text-bold);

                padding: 1%;
                width: 98%;
                height: auto;

            }

            #container #conteudoServicos #textoServicos h2{
                font-weight: 700;
                font-size: 18px;
                color: var(--text-bold);

                padding: 1%;
                width: 98%;
                height: auto;

            }

            #container #conteudoServicos #textoServicos p{
                font-weight: 300;
                font-size: 14px;
                color: var(--text-sample);

                padding: 1%;
                width: 98%;
                height: auto;

            }

            #container #conteudoServicos #textoServicos ul{
                font-weight: 300;
                font-size: 14px;
                color: var(--text-sample);

                padding: 1%;
                width: 98%;
                height: auto;

                list-style: none;

            }

            #container #conteudoServicos #textoServicos ul li{
                width: 100%;
                height: auto;

            }

        }

        @media(max-width: 360px){
            #container #conteudoServicos{
                display: flex;
                align-items: center;
                justify-content: center;

                padding: 2%;
                width: 76%;
                height: auto;

                /*background-color: violet;*/ /*DEBUG*/

            }

            #container #conteudoServicos #textoServicos{
                width: 100%;
                height: auto;
                margin-top: 0%;

                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;

            }

            #container #conteudoServicos #textoServicos h1{
                font-weight: 700;
                font-size: 20px;
                color: var(--text-bold);

                padding: 1%;
                width: 98%;
                height: auto;

            }

            #container #conteudoServicos #textoServicos h2{
                font-weight: 700;
                font-size: 18px;
                color: var(--text-bold);

                padding: 1%;
                width: 98%;
                height: auto;

            }

            #container #conteudoServicos #textoServicos p{
                font-weight: 300;
                font-size: 14px;
                color: var(--text-sample);

                padding: 1%;
                width: 98%;
                height: auto;

            }

            #container #conteudoServicos #textoServicos ul{
                font-weight: 300;
                font-size: 14px;
                color: var(--text-sample);

                padding: 1%;
                width: 98%;
                height: auto;

                list-style: none;

            }

            #container #conteudoServicos #textoServicos ul li{
                width: 100%;
                height: auto;

            }

        }

    </style>

</head>
<body>
    <!-- SideBar -->
    <header id="menu">
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php">Layouts</a></li>
                <li id="active">Sobre</li>
                <li><a href="index.php">Contatos</a></li>

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
                                <a href="services/login.php">Sair<!--<i class="fa fa-power-off"></i>--></a>
                                <?php 
                                    if($situacaolUser == 2){
                                        echo "<a href=\"services\listandoItens.php\">Gerenciar</a>";

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
                <h1>Sobre a Help Connect</h1>
                <p>
                    Oferecer uma oportunidade para pequenos empresários a se estabilizarem como empresa, além de potencializar a divulgação de suas marcas e a qualidade de seus produtos/serviços com maior credibilidade, prezando a qualidade e custos acessíveis.
                    Proporcionado uma experiencia diferenciada ao nosso público alvo, os auxiliando e se desenvolvendo e crescendo junto com suas marcas.
                    
                </p>

                <h2>Missão</h2>
                <p>
                    A Help Connect foi criada com o objetivo de proporcionar o desenvolvimento de pequenos empreendedores, impulsionando e expandido pequenas marcas que estão tentando se fixar no mercado. Fornecendo produtos com qualidade e preços acessíveis para esse público.
                
                </p>
                
                <h2>Visão</h2>
                <p>
                    Ser reconhecida como referência em qualidade, inovação e credibilidade no ramo tecnológico e no atendimento ao cliente. Dando novas oportunidades e um refúgio da crise para pequenos empreendedores que estão tentando fugir da crise, a se estabelecerem como empresa e conseguirem a estabilidade financeira.
                
                </p>

                <h2>Valores</h2> 
                <ul>
                    <li>Pessoas em primeiro lugar;</li>
                    <li>Proximidade com o cliente;</li>
                    <li>Inovação;</li>
                    <li>Respeito;</li>
                    <li>Comprometimento;</li>
                    <li>Ética e Moral;</li>
                    <li>Transparência;</li>
                    <li>Responsabilidade;</li>
                    <li>Qualidade no atendimento;</li>
                    <li>Qualidade nos serviços desenvolvidos;</li>
                    <li>Honestidade e seriedade;</li>
                    <li>Colaboradores bem qualificados.</li>
                    
                </ul>

            </div>
        
        </section>

    </div>
    
    <script src="js/javascript.js"></script>
</body>
</html>