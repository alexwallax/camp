<?php

    session_start();

    if(!isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Campeonatos</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/estilo.css">
        <script src="../../js/jquery.js"></script>
        <script src="../../js/bootstrap.js"></script>  

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="geral_index" class="container">

            <div class="row">

                <div class="col-md-12">

                    <!-- Menu -->
<?php
include "../menu/menu.php";
?>

                    <!-- Corpo -->
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    Usuário autenticado!!!
                    <br />
<?= $_SESSION['USU_USUARIO'] ?>
                    <br />
                    <?= $_SESSION['USU_EMAIL'] ?>

                </div><!-- fim div col-md-12 -->

            </div><!-- fim div row -->

        </div><!-- fim div container -->

        <!-- Rodape -->
<?php
include "../rodape/rodape.php";
?>        

    </body>
</html>
