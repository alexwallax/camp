<?php

    $erro_usuario         = isset($_GET['erro_usuario'])       ? $_GET['erro_usuario']        : 0;
    $erro_email           = isset($_GET['erro_email'])         ? $_GET['erro_email']          : 0;
    $erro_email_confima   = isset($_GET['erro_email_confima']) ? $_GET['erro_email_confima']  : 0;
    $erro_senha_confima   = isset($_GET['erro_senha_confima']) ? $_GET['erro_senha_confima']  : 0;

?>


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
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo*" required="requiored">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário*" required="requiored">
                            <?php
                                if($erro_usuario) {//este teste vai receber 1 ou 0(por padrão recebe 1) se for 1 executa o echo (1 é igual a true e 0 e igual a false)
                                    echo '<font style="color:#FF0000">Usuário já existe</font>';
                                }
                            ?>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required="requiored">
                        </div>                       

                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required="requiored">
                            <?php
                                if($erro_email) {
                                    echo '<font style="color:#FF0000">Email já existe</font>';
                                }
                            ?>                           
                        </div>

<!--                    <div class="form-group">
                            <input type="confirma_email" class="form-control" id="confirma_email" name="confirma_email" placeholder="Confirme o Email*" required="requiored">
                        </div>                        -->
                           <?php
                                if($erro_email_confima) {
                                    echo '<font style="color:#FF0000">E-mails diferentes</font>';
                                }
                            ?>                     
                        <div class="form-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha*" required="requiored">
                        </div>

<!--                    <div class="form-group">
                            <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" placeholder="Confirme a Senha*" required="requiored">
                        </div>                        -->
                           <?php
                                if($erro_senha_confima) {
                                    echo '<font style="color:#FF0000">Senhas diferentes</font>';
                                }
                            ?>                     
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



