<?php

/**
 * Created by PhpStorm.
 * User: davidborges
 * Date: 8/26/18
 * Time: 10:29 AM
 */
//

include ("/var/www/html/PHP/estagioweb/app/model/Noticia.php");
include ("/var/www/html/PHP/estagioweb/app/model/Categoria.php");

class ControladorCadastrar
{
    private $noticia;



    public function cadastrarNoticia(){
        $nomeAutor = $_POST['nomeAutor'];
        $emailAutor = $_POST['emailAutor'];
        $categoria = $_POST['categoria'];
        $texto = $_POST['texto'];
        $this->noticia->adicionarNoticia($nomeAutor, $emailAutor, $categoria, $texto);
    }

    public function carregarCategorias(){
         $categoria = new Categoria();
         $resultados = $categoria->carregarCategorias();
         print_r( $resultados);

    }

    public function verificarRequisicao(){
          $this->carregarCategorias();
    }
}


