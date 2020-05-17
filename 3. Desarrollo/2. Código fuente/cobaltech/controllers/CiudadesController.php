<?php

class CiudadesController extends Ciudad{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/ciudad/index.php');

        require_once('views/layout_admin/footer.php');
    }
    public function create(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/ciudad/create.php');

        require_once('views/layout_admin/footer.php');
    }
    public function store(){
      parent::store_ciudad($_POST['Nombre_ciudad']);
      header("location:?controller=Ciudades&method=index");
    }

}

?>