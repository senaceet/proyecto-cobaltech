<?php

    class seguridad {
        
        // validación de sesión
        public function validar() {
            if(empty($_SESSION['USUARIO'])){
                header("location:?controller=seguridad&method=login");
            }
        }

    }

?>