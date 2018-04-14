<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastre-se</title>
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
        <div id="geral_cadastro" class="container">

            <?php
            include "../menu/menu.php";
            ?>


            <div class="row" align="center">

                <div class="col-md-4" id="cadastro" align="center">
                    <h3><b>Cadastre-se já.</b></h3>
                    <br />
                    <form method="post" action="registra_usuario.php" id="formCadastrarse">
                        <div class="form-group">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
                        </div>

                        <button type="submit" class="btn btn-block ">Inscreva-se</button>
                    </form>
                </div>            
            </div>

        </div><!-- fim da div container --> 

        <?php
        include "../rodape/rodape.php";
        ?>

    </body>
</html>



