<?php

class EstadoGarantiasController extends EstadoGarantia{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/estadogarantia/index.php');

        require_once('views/layout_admin/footer.php');
    }

        public function store(){
            parent::store_estado_garantia($_POST["Estado_garantia"]);
            header("location:?controller=EstadoGarantias&method=index");
            }
}

?>