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

    public function delete(){
        parent::delete_marca($_GET['Id_marca']);
        header("location:?controller=Marcas&method=index");
    }
    
    public function update(){
         parent::update_marca($_POST['id'],
                              $_POST['Nombre_marca']);
        header("location:?controller=Marcas&method=index&process=La marca se actualizo correctamente!!!");
      }

      public function edit(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/marca/edit.php');
  
        require_once('views/layout_admin/footer.php');
    }
  
        
}

?>