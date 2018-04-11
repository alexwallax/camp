<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastre-se</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/estilo.css">
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>  

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <div id="geral">
            
            <nav id="cabecalho" class="navbar-fixed-top navbar-inverse navbar-transparente">
                <div class="container">
                    <!-- Header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed"
                                data-toggle="collapse" data-target="#barra-navegacao">

                            <span class="sr-only">Alternar navegação</span>
                            <span class="icon-bar"></span> <!-- esses 3 spans faz aquele simbolo de quadrado co tres tiras dentro -->
                            <span class="icon-bar"></span> <!-- esses 3 spans faz aquele simbolo de quadrado co tres tiras dentro -->
                            <span class="icon-bar"></span> <!-- esses 3 spans faz aquele simbolo de quadrado co tres tiras dentro -->
                        </button>

                        <a href="../index.php" class="navbar-brand">
                            <span class="logo">Campeonatos Gamer</span>
                        </a>

                    </div> <!-- fim do Header -->
                    <!-- navbar --> 
                    <div class="collapse navbar-collapse" id="barra-navegacao">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../index.php">Início</a></li>  
                            <li><a href="campeonatos.php">Campeonatos</a></li>                                            
                            <li><a href="entrar.php">Entrar</a></li>
                        </ul>
                    </nav>  <!-- fim do navbar -->  

                </div> <!-- fim do container -->

            </div> <!-- fim da div cabecalho -->             
        </div><!-- fim da div geral --> 
        <?php
            echo "<h1>Cadastro</h1>";
        ?>
    </body>
</html>



