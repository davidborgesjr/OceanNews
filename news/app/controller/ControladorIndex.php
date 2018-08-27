<?php
/**
 * Created by PhpStorm.
 * User: davidborges
 * Date: 8/26/18
 * Time: 8:33 PM
 */


class ControladorIndex
{

    public function _construct(){
    }

    public function index()
    {
        readfile("app/view/index.html");
    }


}