<?php

class ProductosController extends Producto{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/producto/index.php');

        require_once('views/layout_admin/footer.php');
    }
}

?>