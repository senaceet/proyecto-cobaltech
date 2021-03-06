<?php

class TiposDocsController extends Tipodoc{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/tipodoc/index.php');

        require_once('views/layout_admin/footer.php');
    }
    public function create(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/tipodoc/create.php');

        require_once('views/layout_admin/footer.php');
    }
    public function store(){
        parent::store_tipodoc($_POST['Abreviatura'],$_POST['Tipodoc']);
        header("location:?controller=TiposDocs&method=index");
      }
      public function delete(){
          parent::delete_tipodoc($_GET['Id_tipodoc']);
          header("location:?controller=TiposDocs&method=index");
        }
     public function edit(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
             
        require_once('views/tipodoc/edit.php');
      
        require_once('views/layout_admin/footer.php');
    }
    public function update(){
        parent::update_tipodoc($_POST['id'],$_POST['Abreviatura'],$_POST['Tipodoc']);
        header ("location:?controller=TiposDocs&method=index&process=Su tipo de documento se actualizo correctamente");
    }
      
}

?>