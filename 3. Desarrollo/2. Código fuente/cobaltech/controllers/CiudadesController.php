<?php

class CiudadesController extends Ciudad{
    
    /*
    **  Reporte de todos los datos de la entidad
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
    public function edit(){
      require_once('views/layout_admin/header.php');
      require_once('views/layout_admin/navbar.php');
      require_once('views/layout_admin/sidebar.php');
       
      require_once('views/ciudad/edit.php');

      require_once('views/layout_admin/footer.php');
  }

    public function store(){
      parent::store_ciudad($_POST['Nombre_ciudad']);
      header("location:?controller=Ciudades&method=index");
    }
    public function delete(){
        parent::delete_ciudad($_GET['Id_ciudad']);
        header("location:?controller=Ciudades&method=index");
      }
      public function update(){
         
        parent::update_ciudad($_POST['id'],$_POST['Nombre_ciudad']);
        header("location:?controller=Ciudades&method=index&process=Su ciudad se actualizo correctamente!!!");
      }
    
}

?>