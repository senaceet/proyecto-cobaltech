<?php

class Factura extends DB{
   
    public function get_all(){
        try {
            $query=parent::connect()->prepare(
            "SELECT * FROM factura INNER JOIN usuario INNER JOIN producto
            WHERE factura.UsuarioId_usuario=usuario.Id_usuario
            AND factura.ProductoId_producto=producto.Id_producto
            ORDER BY factura.Id_factura asc");
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>