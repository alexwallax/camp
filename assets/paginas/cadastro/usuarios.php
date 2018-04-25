

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

                <div class="col-md-4" id="usuarioLista" align="center">

                    <form method="post" action="#" >

                        <h1 align="center" ><b>Usuários</b></h1>



                    </form>

                </div>


            </div>
        </div> <!-- fim da div container --> 


        <?php
        include "../rodape/rodape.php";
        ?>   


    </body>
</html>

