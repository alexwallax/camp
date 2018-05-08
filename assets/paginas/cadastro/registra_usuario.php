<?php

require_once '../../classes/dao/db.php';

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$confirma_email = $_POST['confirma_email'];
$confirma_senha = $_POST['confirma_senha'];
$telefone = $_POST['telefone'];

$objDb = new DB();
$link = $objDb->conecta();

$usuario_existe = false;
$email_existe = false;

//verificar se o usuário já existe
$sql = "SELECT * FROM TB_USUARIOS WHERE USU_USUARIO = '$usuario'";
if($resultado_id = mysqli_query($link, $sql)) {
    
    $dados_usuario = mysqli_fetch_array($resultado_id);
    
    if(isset($dados_usuario['USU_USUARIO'])) {
        $usuario_existe = true;
    } 
} else {
    echo "Erro ao tentar localizar o registro de usuário";
}


//verificar se o email já existe
$sql = "SELECT * FROM TB_USUARIOS WHERE USU_EMAIL = '$email'";
if($resultado_id = mysqli_query($link, $sql)) {
 
    $dados_usuario = mysqli_fetch_array($resultado_id);
    
    if(isset($dados_usuario['USU_EMAIL'])) {       
        $email_existe = true;
    }   
} else {
    echo "Erro ao tentar localizar o registro de email";
}

if($usuario_existe || $email_existe) {
    
    $retorno_get = '';
    
    if($usuario_existe) {
        $retorno_get.= "erro_usuario=1&";
    }
      
    if($email_existe) {
        $retorno_get.= "erro_email=1&";
    }
    
    header('Location: cadastro.php?'.$retorno_get);
    //die() interrompe a execução do escript
    die();
}





//query de insert
$sql = " INSERT INTO TB_USUARIOS(USU_USUARIO, USU_EMAIL, USU_SENHA, USU_NOME, USU_CONFIRMA_EMAIL, USU_CONFIRMA_SENHA, USU_TELEFONE)";
$sql.= "VALUES('$usuario', '$email', '$senha', '$nome', '$confirma_email', '$confirma_senha', '$telefone')";

//executar a query
if (mysqli_query($link, $sql)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o usuário!";
}



?>