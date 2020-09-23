<?php

    class seguridad {
        
        public function validate() {
            if(empty($_SESSION['USUARIO'])){
                header("location:?controller=seguridad&method=form_auth");
            }
        }

    }

?>