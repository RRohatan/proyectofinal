<?php
    header('Content-Type: application/json');

    require_once("../libraries/conexion.php");// para halar los datos del archivo conexion
    
    require_once("../models/usuario.php"); // para traerme al modelo cliente
    $usuario = new Usuario();

    $body = json_decode(file_get_contents("php://input"), true);

$Id_usuario=isset($_POST["Id_usuario"])?$_POST["Id_usuario"]:"";;
$Username=isset($_POST["Username"])?$_POST["Username"]:"";;
$passwordd=isset($_POST["passwordd"])?$_POST["passwordd"]:"";
$Nombres=isset($_POST["Nombres"])?$_POST["Nombres"]:"";
$Apellidos=isset($_POST["Apellidos"])?$_POST["Apellidos"]:"";;
$Tipo_id=isset($_POST["Tipo_id"])?$_POST["Tipo_id"]:"";;
      
    switch($_REQUEST["op"]){

        case "Create":
          
           $data=$usuario->create_usuario(
            $Username,
            $passwordd,
            $Nombres,
            $Apellidos,
            $Tipo_id);
           
            echo json_encode("USUARIO CREADO CON EXITO");
             echo json_encode($data);
       
             
        break;

        case "Read":
            $datos=$cliente->read_cliente();
            echo json_encode($datos);
        break;

        case "Read_Id":
            $datos=$cliente->Read_cliente_x_id($body["Id_cliente"]);
            echo json_encode($datos);
        break;

        case "Update":
            $datos=$cliente->update_cliente(
            $body["Id_cliente"],
            $body["Identificacion"],
            $body["Nombre"],
            $body["Apellidos"],
            $body["Edad"],
            $body["Telefono"],
            $body["Direccion"],
            $body["Email"]);
            echo json_encode("Update Correcto");
            echo json_encode($datos);
        break;

        case "Delete":
            $datos=$cliente->delete_cliente($body["Id_cliente"]);
            echo json_encode("Delete Correcto");
            echo json_encode($datos);
        break;

        

        
    }
        
?>
