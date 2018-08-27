<?php
/**
 * Created by PhpStorm.
 * User: davidborges
 * Date: 8/26/18
 * Time: 6:08 PM
 */

include_once("/var/www/html/PHP/estagioweb/app/connection/FabricaConexao.php");

class Autor
{
    private $conexao;

    public function _construct(){
    }

    public function iniciarConexao(){
        $this->conexao = new Conexao();
    }

    public function fecharConexao(){
        $this->conexao->close();
    }

    public function adicionarAutor($nomeAutor, $emailAutor){
        $this->iniciarConexao();
        $statement = $this->conexao->prepare("INSERT INTO `autor`(`autor`, `email`) VALUES (?,?)");
        $statement->execute();
        $resultados = $statement->get_result();
        $codigoAutor=$this->conexao->insert_id;
        $statement->close();
        $this->fecharConexao();
        return $codigoAutor;

    }
}