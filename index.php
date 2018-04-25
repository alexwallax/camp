


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Campeonatos</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/estilo.css">
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.js"></script>  

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

                                <a href="index.php" class="navbar-brand">
                                    <span class="logo"><img src="assets/img/LogoX1.png"></span>
                                </a>

                            </div> <!-- fim do navbar-header -->
                            <!-- navbar --> 
                            <div class="collapse navbar-collapse" id="barra-navegacao">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="assets/paginas/campeonato/campeonatos.php">Campeonatos</a></li>
                                    <li><a href="assets/paginas/cadastro/cadastro.php">Cadastre-se</a></li>                      
                                    <li><a href="assets/paginas/entrar/entrar.php">Entrar</a></li>
                                </ul>
                            </div><!-- fim da collapse navbar-collapse -->   
                        </div><!-- fim da div container -->  
                    </nav>  <!-- fim da div cabecalho -->  
                    
                    <!-- Fim do menu -->
                                    
                    
                    <!-- Corpo -->


                </div><!-- fim div col-md-12 -->

            </div><!-- fim div row -->

        </div><!-- fim div container -->

        <!-- Rodape -->
        <?php
        include "./assets/paginas/rodape/rodape.php";
        ?>        

    </body>
</html>
