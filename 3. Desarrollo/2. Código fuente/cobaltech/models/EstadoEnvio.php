<?php

class EstadoEnvio extends DB{
   
    public function get_all(){
        try {
        $query=parent::connect()->prepare("SELECT * FROM estado_envio");
        $query->execute();
        return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
           die($e->getMessage());
        }
    }

    public function store_estado_envio(){
        try {
        $query=parent::connect()->prepare("INSERT INTO estado_envio (Estado_envio) VALUES (?)");
        $query->bindParam(1,$Estado_envio, PDO::PARAM_STR);
        $query->execute();
        } catch (Exception $e) {
           die($e->getMessage());
}
    }
}
?>