<?php

class ProductosController extends Producto{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/producto/index.php');

        require_once('views/layout_admin/footer.php');
    }

    
    public function create(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/producto/create.php');

        require_once('views/layout_admin/footer.php');
    }

    public function store(){
        parent::store_producto
                            ($_POST['Id_producto'],
                            $_POST['Nombre_producto'],
                            $_POST['Descripcion'],
                            $_POST['Existencia'],
                            $_POST['Imagen'],
                            $_POST['Precio']);


            header("location:?controller=Productos&method=index");
}
}
?>