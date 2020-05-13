<?php 

class IndexController{
      
    public function index(){
       require_once('views/layer/header.php');
       require_once('views/layer/navbar.php');
       require_once('views/layer/sidebar.php');
       require_once('views/index/index.php');
       require_once('views/layer/footer.php');
    }

    public function admin(){
        require_once('views/layout/header.php');
        require_once('views/layout/navbar.php');
        require_once('views/layout/sidebar.php');
        require_once('views/admin/admin.php');
        require_once('views/layout/footer.php');
     }
}