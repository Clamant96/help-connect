<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styleAcesso.css">

    <style>
        a{
            text-decoration: none;

            font-size: 14px;
            font-weight: 600;
            color: var(--text-bold);

            transition: color, .5s;

        }

        a:hover{
            text-decoration: none;
            
            font-size: 14px;
            font-weight: 600;
            color: var(--text-white);

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

    <form id="form" action="logar.php" method="POST">
        <div id="container">
            <div id="email">
                <p>E-mail</p>
                <input type="email" name="email" placeholder="E-mail" />

            </div>

            <div id="senha">
                <p>Senha</p>
                <input type="password" name="senha" placeholder="" />
                
            </div>

            <div id="botoes">
                <div id="acessar">
                    <button type="submit">Acessar</button>
                    
                </div>

                <div id="cadastro">
                    <button type="submit" ><a href="cadastro.php">Cadastrar-se</a></button>
                    
                </div>
            </div>
        
        </div>

        <!--<div id="cadastro">
            <button>Cadastrar-se</button>
            
        </div>-->

    </form>
    
</body>
</html>