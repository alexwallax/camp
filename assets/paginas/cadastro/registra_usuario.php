<?php

require_once '../../classes/dao/db.php';

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$objDb = new DB();
$link = $objDb->conecta();

//query de insert
$sql = " INSERT INTO TB_USUARIOS(USU_USUARIO, USU_EMAIL, USU_SENHA) VALUES('$usuario', '$email', '$senha')";

//executar a query
if (mysqli_query($link, $sql)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o usuário!";
}


?>