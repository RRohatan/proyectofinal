<?php
    class usuario extends Conectar{

      
       
        public function create_usuario($Username,$passwordd,$Nombres,$Apellidos,$Tipo_id){
           
          
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO usuarios(
            Id_usuario, 
            Username, 
            passwordd,
            Nombres, 
            Apellidos, 
            Tipo_id) VALUES (NULL,?,?,?,?,?)";
            
            $sql=$conectar->prepare($sql);
        
            $sql->bindValue(1, $Username);
            $sql->bindValue(2, $passwordd);
            $sql->bindValue(3, $Nombres);
            $sql->bindValue(4, $Apellidos);
            $sql->bindValue(5, $Tipo_id);
            $sql->execute();
            $Id_usuario=$conectar->lastInsertId();
            $resultado=array(
           "Id_usuario"=>$Id_usuario,
           "Username"=>$Username,
           "passwordd" =>$passwordd,
           "Nombres" =>$Nombres,
           "Apellidos" =>$Apellidos,
           "Tipo id" =>$Tipo_id);
            return $resultado;
        }
    }
    
?>