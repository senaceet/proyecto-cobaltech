<?php

class GarantiasController extends Garantia{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/garantia/index.php');

        require_once('views/layout_admin/footer.php');
    }
}

?>