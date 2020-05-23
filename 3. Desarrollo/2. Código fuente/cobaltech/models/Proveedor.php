<?php

class Proveedor extends DB{
   
    public function get_all(){
        try {
            $query=parent::connect()->prepare("SELECT * FROM proveedor ");
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function store_proveedor($Id_proveedor,$Razon_social,$Contacto,$Cargo,$Telefono,$Extension,
    $Movil,$Direccion,$Bodega,$Website,$Email){
        try {
            $query=parent::connect()->prepare("INSERT INTO proveedor (Id_proveedor,Razon_social,Contacto,
            Cargo,Telefono,Extension,Movil,Direccion,Bodega,Website,Email) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
            $query->bindParam(1,$Id_proveedor,PDO::PARAM_INT);
            $query->bindParam(2,$Razon_social,PDO::PARAM_STR);
            $query->bindParam(3,$Contacto,PDO::PARAM_STR);
            $query->bindParam(4,$Cargo,PDO::PARAM_STR);
            $query->bindParam(5,$Telefono,PDO::PARAM_STR);
            $query->bindParam(6,$Extension,PDO::PARAM_STR);
            $query->bindParam(7,$Movil,PDO::PARAM_STR);
            $query->bindParam(8,$Direccion,PDO::PARAM_STR);
            $query->bindParam(9,$Bodega,PDO::PARAM_STR);
            $query->bindParam(10,$Website,PDO::PARAM_STR);
            $query->bindParam(11,$Email,PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete_proveedor($Id_proveedor){
        try {
            $query=parent::connect()->prepare("DELETE FROM Proveedor WHERE Id_proveedor=?");
            $query->bindParam(1,$Id_proveedor,PDO::PARAM_INT);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());

        }
       
    }
}



/*
 class Ciudad extends DB {

    public function create_ciudad($Nombre_ciudad){
        try {
            $query=parent::connect->prepare("INSERT INTO ciudad (Nombre_ciudad) VALUES (?)");
            $query->bindParam(1,$Nombre_ciudad,PDO::PARAM_STR);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        }

    }

    public function read_ciudad($Nombre_ciudad){
        try {
            $query=parent::connect->prepare("SELECT * FROM ciudad WHERE Nombre_ciudad= ? "); 
            $query->bindParam(1,$Nombre_ciudad,PDO::PARAM_STR);
            return $query->fetchAll(PDO::FETCH_OBJ);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        } 
    }

    public function update_ciudad($Nombre_ciudad){
        try {
            $query=parent::connect->prepare("UPDATE ciudad(Nombre_ciudad) VALUES (?)"); 
            $query->bindParam(1,$Nombre_ciudad,PDO::PARAM_STR);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        }
    }

    public function delete_ciudad($Nombre_ciudad){
        try {
            $query=parent::connect->prepare("DELETE FROM ciudad WHERE Nombre_ciudad= ? "); 
            $quey->bindParam(1,$Nombre_ciudad,PDO::PARAM_STR);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        }
    }
 }
 */

?>