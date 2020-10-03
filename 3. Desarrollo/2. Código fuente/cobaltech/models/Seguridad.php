<?php

    class seguridad {
        
        // validación de sesión
        public function validar() {
            if(empty($_SESSION['USUARIO'])){
                header("location:?controller=cobaltech&method=login");
            }
        }

    }

?>