<?php

class EstadoGarantia extends DB{
   
    public function get_all(){
        try {
        $query=parent::connect()->prepare("SELECT * FROM estado_garantia");
        $query->execute();
        return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
           die($e->getMessage());
        }
    }

    public function store_estado_garantia(){
        try {
        $query=parent::connect()->prepare("INSERT INTO estado_garantia (Estado_garantia) VALUES (?)");
        $query->bindParam(1,$Estado_garantia, PDO::PARAM_STR);
        $query->execute();
        } catch (Exception $e) {
           die($e->getMessage());
}
    }
}

?>