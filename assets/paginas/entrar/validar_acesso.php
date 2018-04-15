<?php
require_once '../../classes/dao/db.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = " SELECT * FROM TB_USUARIOS WHERE USU_USUARIO = '$usuario' AND USU_SENHA = '$senha' ";

$objDb = new DB();
$link = $objDb->conecta();

//registrar usuario no banco de dados
$resultado_id = mysqli_query($link, $sql);

if ($resultado_id) {
    $dados_usuario = mysqli_fetch_array($resultado_id);
    
    if (isset($dados_usuario['USU_USUARIO'])) {
//        echo 'existe';
        header("location:../../../assets/paginas/index/index.php");
    } else {
         header("location:../../../assets/paginas/entrar/entrar.php");
    }
    
   

//    var_dump($dados_usuario);
    
} else {
    echo "Erro de execução da consulta, favor entre em contato com o admin do site";
}



//update - true/false - caso atualizado com sucesso ou false se não der certo
//insert - true/false
//select - false - caso exista algum problema na consulta/ se nao houver erro retorna um resource de uma referencia de uma informação externa do php 
//delete - true/false
?>
