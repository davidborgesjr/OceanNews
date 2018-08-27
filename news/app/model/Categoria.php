<?php
/**
 * Created by PhpStorm.
 * User: davidborges
 * Date: 8/26/18
 * Time: 5:55 PM
 */

include_once("/var/www/html/PHP/estagioweb/app/connection/FabricaConexao.php");

class Categoria
{
    private $conexao;

    public function _construct(){
    }

    public function iniciarConexao(){
        $this->conexao = new FabricaConexao() ;
        $this->conexao->carregarConexao();

    }

    public function fecharConexao(){
        $this->conexao->close();
    }

    public function adicionarCategoria($categoria){
        $this->iniciarConexao();
        $statement = $this->conexao->prepare("INSERT INTO noticia VALUES (?, ?, ? )");

    }


    public function carregarCategorias(){
        try{
            $pdo = FabricaConexao::carregarConexao();
            $stmt = $pdo->query("SELECT codigo, descricao FROM categoria");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);


        }catch (Exception $e){
            throw  $e;
        }

    }

}