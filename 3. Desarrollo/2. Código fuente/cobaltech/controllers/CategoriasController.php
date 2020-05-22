<?php

class CategoriasController extends Categoria{

    /*
        Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/categoria/index.php');

        require_once('views/layout_admin/footer.php');
    }

    public function create(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/categoria/create.php');

        require_once('views/layout_admin/footer.php');
    }
    public function store(){
      parent::store_categoria($_POST['Nombre_categoria']);
      header("location:?controller=Categorias&method=index");
    }

    public function delete(){
        parent::delete_categoria($_GET['Id_categoria']);
        header("location:?controller=Categorias&method=index");
    }

}

?>