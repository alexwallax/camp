<?php

require_once './db.php';

$objDb = new DB();
$link = $objDb->conecta();

class UsuarioDAO {

    public function inserir(Usuario $usuario) {
        $sql = "insert into usuarios (nome) value ('{$usuario->getNome()}')";
        return mysqli_query($this->conexao, $sql);
    }

    public function remover(Usuario $usuario) {
        $sql = "delete from usuarios where id={$usuario->getId()}";
        return mysqli_query($this->conexao, $sql);
    }    

    public function editar(Usuario $usuario) {
        $sql = "update usuarios set "
                . "nome='{$usuario->getNome()}' "
                . "where id={$usuario->getId()}";
        return mysqli_query($this->conexao, $sql);
    }
    
    public function listarTodos() {
        $usuarios = array();
        $sql = "select * from usuarios";
        $resultado = mysqli_query($this->conexao, $sql);
        while ($usuario_array = mysqli_fetch_assoc($resultado)) {
            $usuario = new Usuario();
            $usuario->setId($usuario_array['id']);
            $usuario->setNome($usuario_array['nome']);
            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }    
    
}
