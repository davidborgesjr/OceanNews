<?php
/**
 * Created by PhpStorm.
 * User: davidborges
 * Date: 8/26/18
 * Time: 12:56 PM
 */

include_once("/var/www/html/PHP/estagioweb/app/connection/FabricaConexao.php");

class Noticia
{
    private $conexao;

    public function _construct(){
    }

    public function iniciarConexao(){
        $this->conexao = new Conexao();
    }

    public function adicionarNoticia($codigoAutor, $codigoCategoria, $imagem, $texto, $descricao){
        $this->iniciarConexao();
        $statement = $this->conexao->prepare("INSERT INTO noticia VALUES (?, ?, ? , ?, ?)");
        $statement->bind_param("sssss", $codigoAutor, $codigoCategoria, $imagem, $texto, $descricao);
        $statement->execute();

    }
}