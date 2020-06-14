<?php

class GarantiasController extends Garantia{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/garantia/index.php');

        require_once('views/layout_admin/footer.php');
    }

    public function update_st_garantia(){
      parent::update_state_garantia($_POST['Id_estado_garantia'],$_POST['Id_garantia']);
      header("location:?controller=Garantias&method=index&process=El estado de la garantía se actualizó correctamente!!!");
  }

  public function show(){
   require_once('views/layout_admin/header.php');
   require_once('views/layout_admin/navbar.php');
   require_once('views/layout_admin/sidebar.php');       
   require_once('views/garantia/show.php');
   require_once('views/layout_admin/footer.php');
}

}

?>