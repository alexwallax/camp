

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Entrar</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/estilo.css">
        <script src="../../css/../js/jquery.js"></script>
        <script src="../../css/../js/bootstrap.js"></script>  

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body>
        <div id="geral_entrar" class="container">

            <?php
            include "../menu/menu.php";
            ?>

            <!--formulario de entrar-->  
            <div class="row" align="center">

                <div class="col-md-4" id="entrar" align="center">

                    <form method="post" action="validar_acesso.php" id="formLogin">

                        <h1 align="center"><b>Login</b></h1>
                        <div class="form-group">
                            <input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
                        </div>

                        <button type="buttom" class="btn btn-block" id="btn_login">Entrar</button>

                        <br /><br />
                        <h6 align="center">Não é registrado?<a href="../cadastro/cadastro.php">Crie uma conta</a></h6>

                    </form>

                </div>


            </div>
        </div> <!-- fim da div container --> 


        <?php
        include "../rodape/rodape.php";
        ?>   


    </body>
</html>



