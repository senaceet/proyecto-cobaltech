<?php

class ProveedoresController extends Proveedor{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/proveedor/index.php');

        require_once('views/layout_admin/footer.php');
    }

    public function create(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/proveedor/create.php');

        require_once('views/layout_admin/footer.php');
    }
    public function store(){
      parent::store_proveedor($_POST['Id_proveedor'],$_POST['Razon_social'],$_POST['Contacto'],
      $_POST['Cargo'],$_POST['Telefono'],$_POST['Extension'],$_POST['Movil'],$_POST['Direccion'],
      $_POST['Bodega'],$_POST['Website'],$_POST['Email']);
      
      header("location:?controller=Proveedores&method=index");
    }
}

?>