<?php

class RolesController extends Rol{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/rol/index.php');

        require_once('views/layout_admin/footer.php');
    }
    public function edit(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/rol/edit.php');
  
        require_once('views/layout_admin/footer.php');
    }
    public function create(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/rol/create.php');

        require_once('views/layout_admin/footer.php');
    }

    public function store(){
        parent::store_rol($_POST['Tipo_rol']);
        header("location:?controller=Roles&method=index");
    }
    public function delete(){
          parent::delete_rol($_GET['Id_rol']);
          header("location:?controller=Roles&method=index");
    }
    public function update(){
            parent::update_rol($_POST['id'],$_POST['Tipo_rol']);
            header ("location:?controller=Roles&method=index&process=Su Rol se actualizo correctamente");
    }  
}

?>