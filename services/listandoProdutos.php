<?php 

require 'verifica.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cadastros</title>
  <link rel="stylesheet" href="../css/styleListandoProdutos.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/styleIconPerfil.css">
  
</head>

<body>

<!-- SideBar -->
<header id="menu">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../index.php">Layouts</a></li>
                <li><a href="../sobre.php">Sobre</a></li>
                <li><a href="../index.php">Contatos</a></li>
                <li><a href="listandoItens.php">Perfis</a></li>
                <li id="active">Produtos</li>

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
                          <img src="../img/profile-user.svg">
                          
                          <div class="dropdown-content">
                              <div id="dadosUsuario">
                                  <h1><?php echo $nomeUser; ?></h1>
                                  <p><?php echo $emailUser; ?></p>
                              
                              </div>
                              <hr />
                              <div id="opcoesUsuario">
                                  <a href="login.php">Sair<!--<i class="fa fa-power-off"></i>--></a>
                              
                              </div>
                          </div>
                    </div>

                </div>

            </header>

        </section>

        <div id="cadastrosPessoas">
            <div id="listar">
                <?php 
                require_once 'conectarBanco.php';
                $sql = "SELECT * FROM produto";
                if ($result = $mysqli->query($sql)) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<div id=\"cardPerfis\">
                            <div id=\"opcoes\">
                              <a href='produtoAlterar.php?id=" . $row["idproduto"] . "'>
                                <svg id=\"edit\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-folder-plus\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                  <path fill-rule=\"evenodd\" d=\"M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z\"/>
                                  <path fill-rule=\"evenodd\" d=\"M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z\"/>
                                </svg>
                              </a>

                              <a href='produtoExcluirOk.php?id=" . $row["idproduto"] . "'>
                                  <svg id=\"remove\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-folder-x\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M11.146 10.146a.5.5 0 0 1 .708 0L13 11.293l1.146-1.147a.5.5 0 0 1 .708.708L13.707 12l1.147 1.146a.5.5 0 0 1-.708.708L13 12.707l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 12l-1.147-1.146a.5.5 0 0 1 0-.708z\"/>
                                  </svg>
                              </a>

                            </div>
                            
                            <div id=\"perfil\"> 

                              <div id=\"img\">
                                <img src=\"../img/layout_teste.jpg\">
                            
                              </div>

                              <div id=\"dadosUsuario\"> 
                                <div id=\"nome\">"
                                  . $row["nome"] .
                                
                                "</div>
                              </div>

                              <div id=\"dadosUsuario\"> 
                                <div id=\"descricao\">"
                                  . $row["descricao"] .
                              
                                "</div>
                              </div> 

                              <div id=\"dadosUsuario\">  
                                <div id=\"preco\">R$ "
                                  . $row["preco"] .
                              
                                "</div>
                              </div>

                            </div>

                          </div>
                          ";
                  }

                  $result->free_result();
                }
                $mysqli->close();
                ?>
                  <?php 
                      echo "<div id=\"cardPerfis\">
                      <div id=\"opcoes\">
                        <a href='produtoIncluir.php'>
                          <svg id=\"add\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-folder\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z\"/>
                            <path fill-rule=\"evenodd\" d=\"M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z\"/>
                          </svg>
                        </a>

                      </div>

                      <div id=\"perfil\"> 
                        <div id=\"adicionarProduto\"> 
                          <p>Adicionar novo Prouto</p> 
                          <div id=\"resultado\"> <b>Administrador: </b>"
                            . $nomeUser .
                          
                          "</div>
                        </div> 

                      </div>

                    </div>
                    ";
                  
                  ?>
                
            </div>

      </div>  

    </div>
    
    <script src="../js/javascript.js"></script>

</body>
</html>