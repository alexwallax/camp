<?php

class DB {
    
    //host - endereço onde o MySQL esta instalado "neste caso no proprio comp"
    private $host = 'localhost';
    
    //usuario - que vai conter o usuario de conexão com o MySQL
    private $usuario = 'root';
    
    //senha
    private $senha = '';
    
    //banco de dados - onde serão criado as tabelas
    private $database = 'DB_CAMPEONATOS';
    
    public function conecta() {
        
        //criar a conexão
        $conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
        
        //ajustar a charset de comunicação entre a aplicação e o banco de dados
        mysqli_set_charset($conexao, 'utf-8');
        
        //verificar se houve erro de conexão
        if(mysqli_connect_errno()) {
            echo "Erro ao tentar de conectar com o Banco de Dados MySQL: " . mysqli_connect_error();
        }
        
        return $conexao;
        
    }
    
}


?>
