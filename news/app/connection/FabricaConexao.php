<?php
/**
 * Created by PhpStorm.
 * User: davidborges
 * Date: 8/26/18
 * Time: 5:57 PM
 */


class FabricaConexao
{

    private $database;

    public function _construct(){
        $this->database = include('config.php');
        echo $this->database['host'];
    }

//    public function carregarConexao(){
//        $conexao = new PDO("mysql:host=$this->database['host'];
//            dbname=$this->database['nomeBanco']",
//            $this->database['usuario'],
//            $this->database['senha']);
//        return $conexao;
//    }

    public static function carregarConexao(){
        return new PDO("mysql:host=localhost;database=comicsnews","root", "root");
    }

}