<?php

class UsuariosController extends Usuario{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/usuario/index.php');

        require_once('views/layout_admin/footer.php');
    }
    public function create(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/usuario/create.php');

        require_once('views/layout_admin/footer.php');
    }
    public function store(){
      parent::store_usuario($_POST['Doc_usuario'],
                            $_POST['Primer_nombre'],
                            $_POST['Segundo_nombre'],
                            $_POST['Primer_apellido'],
                            $_POST['Segundo_apellido'],
                            $_POST['Correo_electronico'],
                            $_POST['Contrasena'],
                            $_POST['Direccion'],
                            $_POST['Telefono'],
                            $_POST['Movil'],
                            $_POST['RolId_rol'],
                            $_POST['CiudadId_ciudad'],
                            $_POST['Tipo_documentoId_tipodoc'],
                            $_POST['ProductoId_producto']);
      
      header("location:?controller=Usuarios&method=index");
    }
    public function delete(){
        parent::delete_usuario($_GET['Id_usuario']);
        header("location:?controller=Usuarios&method=index");
      }
}

?>