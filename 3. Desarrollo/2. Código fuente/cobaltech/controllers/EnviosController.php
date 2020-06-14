<?php

class EnviosController extends Envio{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/envio/index.php');

        require_once('views/layout_admin/footer.php');
    }
    public function update_st_envio(){
        parent::update_state_envio($_POST['Id_estado_envio'],$_POST['Id_envio']);
        header("location:?controller=Envios&method=index&process=Su estado de envío se actualizo correctamente!!!");
    }

    public function show(){
      require_once('views/layout_admin/header.php');
      require_once('views/layout_admin/navbar.php');
      require_once('views/layout_admin/sidebar.php');       
      require_once('views/envio/show.php');
      require_once('views/layout_admin/footer.php');
   }
}

?>