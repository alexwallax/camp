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

//query de insert
$sql = " INSERT INTO TB_USUARIOS(USU_USUARIO, USU_EMAIL, USU_SENHA, USU_NOME, USU_CONFIRMA_EMAIL, USU_CONFIRMA_SENHA, USU_TELEFONE)";
$sql.= "VALUES('$usuario', '$email', '$senha', '$nome', '$confirma_email', '$confirma_senha', '$telefone')";

//executar a query
if (mysqli_query($link, $sql)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o usuário!";
}

//if() {
//    
//}

?>