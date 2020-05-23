<?php

class EstadoEnviosController extends EstadoEnvio{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/estadoenvio/index.php');

        require_once('views/layout_admin/footer.php');
    }

    public function create(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/estadoenvio/create.php');

        require_once('views/layout_admin/footer.php');
    }


public function store(){
parent::store_estado_envio($_POST["Estado_envio"]);
header("location:?controller=EstadoEnvios&method=index");
}

}

?>