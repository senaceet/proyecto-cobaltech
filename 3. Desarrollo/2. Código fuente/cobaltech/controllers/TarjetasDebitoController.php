<?php

class TarjetasDebitoController extends TarjetaDebito{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/tarjetadebito/index.php');

        require_once('views/layout_admin/footer.php');
    }
    public function show(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');       
        require_once('views/tarjetadebito/show.php');
        require_once('views/layout_admin/footer.php');
     }
}

?>