<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Campeonatos</title>
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

        <div id="geral_campeonato" class="container">

            <?php
            include "../menu/menu.php";
            ?>

            <div class="row" align="center">

                <div class="col-md-12" id="campeonato" align="center">

                    <form method="post" action="validar_acesso.php" id="formLogin">

                        <h1 align="center"><b>Campeonato</b></h1>
                        <br />

                        <div class="form-group row">

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="col-md-3 usuario_participante" id="usuario01"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="Usuário 01" />
                                    </div>   

                                    <div class="col-md-3 usuario01_gol" id="usuario01"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="" />
                                    </div>

                                    <div class="col-md-3 usuario_participante" id="usuario02">  
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="Usuário 02" />
                                    </div> 

                                    <div class="col-md-3 usuario02_gol" id="usuario02"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="" />
                                    </div>

                                </div>

                                <br />
                                <br />
                                <br />

                                <div class="col-md-12">

                                    <div class="col-md-3 usuario_participante" id="usuario03"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="Usuário 03" />
                                    </div>   

                                    <div class="col-md-3 usuario03_gol" id="usuario03"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="" />
                                    </div>

                                    <div class="col-md-3 usuario_participante" id="usuario04">  
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="Usuário 04" />
                                    </div> 

                                    <div class="col-md-3 usuario04_gol" id="usuario04"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="" />
                                    </div>

                                </div>

                                <br />
                                <br />
                                <br />

                                <div class="col-md-12">

                                    <div class="col-md-3 usuario_participante" id="usuario05"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="Usuário 05" />
                                    </div>   

                                    <div class="col-md-3 usuario05_gol" id="usuario05"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="" />
                                    </div>

                                    <div class="col-md-3 usuario_participante" id="usuario06">  
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="Usuário 06" />
                                    </div> 

                                    <div class="col-md-3 usuario06_gol" id="usuario06"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="" />
                                    </div>

                                </div>

                                <br />
                                <br />
                                <br />

                                <div class="col-md-12">

                                    <div class="col-md-3 usuario_participante" id="usuario07"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="Usuário 07" />
                                    </div>   

                                    <div class="col-md-3 usuario07_gol" id="usuario07"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="" />
                                    </div>

                                    <div class="col-md-3 usuario_participante" id="usuario08">  
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="Usuário 08" />
                                    </div> 

                                    <div class="col-md-3 usuario08_gol" id="usuario08"> 
                                        <input type="text" class="form-control" id="usuario_camp" name="usuario" placeholder="" />
                                    </div>

                                </div>
                                
                            </div>

                        </div>

                    </form>

                </div>

            </div>  <!-- fim da div geral --> 

        </div>

        <!-- Rodape -->
        <?php
        include "../rodape/rodape.php";
        ?>
    </body>

</html>



