<?php
  require 'verifica.php';
  
  // abre conexao com o banco 
  require_once 'conectarBanco.php';
  
  $id = $_GET["id"];
  $sql = "SELECT idproduto, nome, descricao, preco FROM produto WHERE idproduto = " . $id;

  $result = $mysqli->query($sql);

  $row = $result->fetch_assoc();
  $id = $row["idproduto"];
  $nome = $row["nome"];
  $descricao = $row["descricao"];
  $preco = $row["preco"];

  $result->free_result();

  $mysqli->close();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Perfil: <?php echo $nomeUser;?></title>

    <link rel="stylesheet" href="../css/styleAcesso.css">

    <style>
        #form #container #botoes {
            display: flex;
            align-items: center;
            flex-direction: row;
            justify-content: center;

            width: 100%;
            height: auto;

            /*background-color: cadetblue;*/

        }

        #form #container #botoes #cadastro{
            width: 100%;
            height: auto;

            display: flex;
            align-items: center;
            justify-content: center;

        }

        #form #container #botoes #cadastro button {
            padding: 4%;
            width: 70%;
            height: auto;

            border: none;

            font-size: 14px;
            font-weight: 600;
            color: var(--text-bold);

            background-color: var(--backgroundColor-gray2);

            box-shadow: 0px 3px 5px -5px var(--boxShadow);

            transition: background-color, box-shadow, color, .5s;

        }

        #form #container #botoes #cadastro button:hover{
            box-shadow: 0px 0px 0px 0px var(--boxShadow);

            background-color: var(--backgroundColor-gray2);

            color: var(--text-bold);

        }

    </style>

</head>
<body>
    <div id="logo">
        <div id="imagem">
            <img src="../img/logoSite.png" alt="Help Connect">
        
        </div>

        <p>Seja Bem-Vindo</p>

    </div>

    <form id="form" action="produtoAlterarOk.php" method="POST">
        <div id="container">
            <div style="display:none;"> <!-- DEIXA O ID INVISIVEL PARA O USUARIO -->
                <p>ID</p>
                <input type="hiddem" name="idproduto" value="<?php echo $id; ?>">
            </div>
            <div id="nome">
                <p>Nome Produto</p>
                <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome; ?>"/>

            </div>

            <div id="email">
                <p>Descricao</p>
                <input type="text" name="descricao" placeholder="Descricao" value="<?php echo $descricao; ?>"/>

            </div>

            <div id="senha">
                <p>Preco</p>
                <input type="text" name="preco" placeholder="Preco" value="<?php echo $preco; ?>"/>
                
            </div>

            <div id="botoes">

                <div id="cadastro">
                    <button type="submit">Atualizar</button>
                    
                </div>
            </div>
        
        </div>

    </form>
    
</body>
</html>