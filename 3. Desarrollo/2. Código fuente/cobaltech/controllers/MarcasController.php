<?php

class MarcasController extends Marca{

    /*
    **  Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/marca/index.php');

        require_once('views/layout_admin/footer.php');
    }

    public function create(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
          
        require_once('views/marca/create.php');

        require_once('views/layout_admin/footer.php');
    }
    
    public function store(){
        parent::store_marca($_POST['Nombre_marca']);
        header("location:?controller=Marcas&method=index");
    }
    
}

?>