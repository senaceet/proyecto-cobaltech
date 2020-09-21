<?php

class EstadoEnviosController extends EstadoEnvio{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/estadoenvio/index.php');

        require_once('views/layout_admin/footer.php');
    }

    public function create(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/estadoenvio/create.php');

        require_once('views/layout_admin/footer.php');
    }

    public function store(){
      parent::store_estado_envio($_POST["Estado_envio"]);
      header("location:?controller=EstadoEnvios&method=index");
   }

public function edit(){
   require_once('views/layout_admin/header.php');
   require_once('views/layout_admin/navbar.php');
   require_once('views/layout_admin/sidebar.php');
    
   require_once('views/estadoenvio/edit.php');

   require_once('views/layout_admin/footer.php');
}

public function update(){
   parent::update_estado_envio($_POST['id'],$_POST['Estado_envio']);
   header ("location:?controller=EstadoEnvios&method=index");
}

public function delete(){
   parent::delete_estado_envio($_GET['Id_estado_envio']);
   header("location:?controller=EstadoEnvios&method=index");
}
}

?>