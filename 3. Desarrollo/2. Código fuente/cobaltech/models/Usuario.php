<?php

   class Usuario extends DB {
      
      public function get_email(){
         try {
            $query=parent::connect()->prepare("SELECT * FROM usuario WHERE email = ?");
            $query->bindParam(1,$email,PDO::PARAM_STR);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
         } catch (Exception $e) {
            die($e->getMessage());
         }
      }
      public function get_all(){
         try {
            $query=parent::connect()->prepare(
               "SELECT * FROM usuario INNER JOIN tipo_documento INNER JOIN ciudad INNER JOIN rol
               WHERE usuario.Tipo_documentoId_tipodoc=tipo_documento.Id_tipodoc 
               AND usuario.CiudadId_ciudad=ciudad.Id_ciudad
               AND usuario.RolId_rol=rol.Id_rol
               ORDER BY usuario.Id_usuario desc");

            $query->execute();
         return  $query->fetchAll(PDO::FETCH_OBJ);
         } catch (Exception $e) {
         die($e->getMessage());
            }  
      }
      public function store_usuario($Doc_usuario,$Primer_nombre,$Segundo_nombre,$Primer_apellido,
                                    $Segundo_apellido,$Correo_electronico,$Contrasena,$Direccion,$Telefono,
                                    $Movil,$RolId_rol,$CiudadId_ciudad,$Tipo_documentoId_tipodoc){
         try {
            $query=parent::connect()->prepare("INSERT INTO usuario (Doc_usuario,Primer_nombre,
            Segundo_nombre,Primer_apellido,Segundo_apellido,Correo_electronico,Contrasena,Direccion,Telefono,
            Movil,RolId_rol,CiudadId_ciudad,Tipo_documentoId_tipodoc)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
               $query->bindParam(1,$Doc_usuario,PDO::PARAM_STR);
               $query->bindParam(2,$Primer_nombre,PDO::PARAM_STR);
               $query->bindParam(3,$Segundo_nombre,PDO::PARAM_STR);
               $query->bindParam(4,$Primer_apellido,PDO::PARAM_STR);
               $query->bindParam(5,$Segundo_apellido,PDO::PARAM_STR);
               $query->bindParam(6,$Correo_electronico,PDO::PARAM_STR);
               $query->bindParam(7,$Contrasena,PDO::PARAM_STR);
               $query->bindParam(8,$Direccion,PDO::PARAM_STR);
               $query->bindParam(9,$Telefono,PDO::PARAM_STR);
               $query->bindParam(10,$Movil,PDO::PARAM_STR);
               $query->bindParam(11,$RolId_rol,PDO::PARAM_STR);
               $query->bindParam(12,$CiudadId_ciudad,PDO::PARAM_STR);
               $query->bindParam(13,$Tipo_documentoId_tipodoc,PDO::PARAM_STR);
               $query->execute();
         } catch (Exception $e) {
         die($e->getMessage());
         }
      }
      public function delete_usuario($Id_usuario){
            try {
               $p= parent::connect()->prepare("DELETE FROM usuario WHERE Id_usuario=?");
               $p->bindParam(1,$Id_usuario,PDO::PARAM_INT);
               $p->execute();
                  
            } catch (Exception $e) {
            die ($e->getMessage());
            }
      }
      public function update_usuario($id,$Doc_usuario,$Primer_nombre,$Segundo_nombre,$Primer_apellido,
                                       $Segundo_apellido,$Correo_electronico,$Direccion,$Telefono,
                                       $Movil,$RolId_rol,$CiudadId_ciudad,$Tipo_documentoId_tipodoc){
            try {
         $query=parent::connect()->prepare("UPDATE usuario 
                                          SET Doc_usuario=?,Primer_nombre=?,Segundo_nombre=?,
                                          Primer_apellido=?,Segundo_apellido=?,Correo_electronico=?,
                                          Direccion=?,Telefono=?,Movil=?,RolId_rol=?,
                                          CiudadId_ciudad=?,Tipo_documentoId_tipodoc=?
                                          WHERE Id_usuario= ?"); 
         $query->bindParam(1,$Doc_usuario,PDO::PARAM_INT);
         $query->bindParam(2,$Primer_nombre,PDO::PARAM_STR);
         $query->bindParam(3,$Segundo_nombre,PDO::PARAM_STR);
         $query->bindParam(4,$Primer_apellido,PDO::PARAM_STR);
         $query->bindParam(5,$Segundo_apellido,PDO::PARAM_STR);
         $query->bindParam(6,$Correo_electronico,PDO::PARAM_STR);
         //$query->bindParam(7,$Contrasena,PDO::PARAM_STR);
         $query->bindParam(7,$Direccion,PDO::PARAM_STR);
         $query->bindParam(8,$Telefono,PDO::PARAM_STR);
         $query->bindParam(9,$Movil,PDO::PARAM_STR);
         $query->bindParam(10,$RolId_rol,PDO::PARAM_INT);
         $query->bindParam(11,$CiudadId_ciudad,PDO::PARAM_INT);
         $query->bindParam(12,$Tipo_documentoId_tipodoc,PDO::PARAM_INT);
         $query->bindParam(13,$id,PDO::PARAM_INT);
         $query->execute();
         
            } catch (Exception $e) {
            die ($e->getMessage()); 
            }
      }
      public function get_id($id){
            try {
               $query=parent::connect()->prepare("SELECT * FROM usuario WHERE Id_usuario= ?");
               $query->bindParam(1,$id,PDO::PARAM_INT);
               $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
            } catch (Exception $e) {
            die($e->getMessage());
            }
      }
      public function show_id($id){
            try {
               $p= parent::connect()->prepare("SELECT * FROM usuario WHERE Id_usuario = ?");
               $p->bindParam(1,$id,PDO::PARAM_INT);
               $p->execute();
               return $p->fetch(PDO::FETCH_OBJ);
            } catch (Exception $e) {
               die ($e->getMessage());
            }
         }   
}

?>