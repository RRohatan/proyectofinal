<?php
    header('Content-Type: application/json');

    require_once("../libraries/conexion.php");// para halar los datos del archivo conexion
    
    require_once("../models/Cliente.php"); // para traerme al modelo cliente
    

    $cliente = new Cliente();

    

$Idecliente=isset($_POST["Id_cliente"])?$_POST["Id_cliente"]:"";;
$Identificacion=isset($_POST["Identificacion"])?$_POST["Identificacion"]:"";
$Nombre=isset($_POST["Nombre"])?$_POST["Nombre"]:"";
$Apellidos=isset($_POST["Apellidos"])?$_POST["Apellidos"]:"";;
$Edad=isset($_POST["Edad"])?$_POST["Edad"]:"";;
$Telefono=isset($_POST["Telefono"])?$_POST["Telefono"]:"";;
$Direccion=isset($_POST["Direccion"])?$_POST["Direccion"]:"";;
$Email=isset($_POST["Email"])?$_POST["Email"]:"";;

    //$body = json_decode(file_get_contents("php://input"), true);
  
    //$option = $_REQUEST['op'];
   

   switch($_REQUEST["op"]){

        case "Create":
           
           /* if (empty($body)) {

            echo json_encode("DEBES RELLENAR TODOS LOS CAMPOS");
        
       
        }else*/
        if 
        (is_numeric($Identificacion) &&
         is_string($Nombre) && 
         is_string($Apellidos) &&
         is_numeric($Edad) &&
         is_numeric($Telefono)&&
         is_string($Direccion)&&
         filter_var($Email, FILTER_VALIDATE_EMAIL)){

            if (empty($Id_cliente)) {
                $datos=$cliente->create_cliente(
                    $Identificacion,
                    $Nombre,
                    $Apellidos,
                    $Edad,
                    $Telefono,
                    $Direccion,
                    $Email);
                    echo json_encode("CLIENTE CREADO CON EXITO");
                    echo json_encode($datos);
            }else {
                $datos=$cliente->update_cliente(
                    $Id_cliente,
                    $Identificacion,
                    $Nombre,
                    $Apellidos,
                    $Edad,
                    $Telefono,
                    $Direccion,
                    $Email);
                    echo json_encode("CLIENTE ACTUALIZADO CON EXITO");
                    echo json_encode($datos);
            }

           

            
      
        }elseif (!is_numeric($Identificacion)) {
            echo json_encode("EL CAMPO IDENTIFICACION DEBE SER NUMERICO ".$Identificacion);
        } elseif (!is_string($Nombre)) {
            echo json_encode("EL CAMPO NOMBRE DEBE SER ALFABETICO");
        }elseif (!is_string($Apellidos)) {
            echo json_encode("EL CAMPO APELLIDO DEBE SER ALFABETICO");
        }elseif ( !is_numeric($Edad)) {
            echo json_encode("LA EDAD DEBE SER UN NUMERO");
        }elseif (!is_numeric($Telefono)) {
            echo json_encode("EL CAMPO TELEFONO DEBE SER NUMERICO");
        }elseif ( !is_string($Direccion)) {
            echo json_encode("EL CAMPO DIRECCION DEBE SER ALFANUMERICO");
        }elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode("DEBES REGISTRAR UN EMAIL VALIDO");
        } 
                 
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

            echo json_encode("holaaaaaa");
           if (empty($body)) {

                echo json_encode("DEBES RELLENAR TODOS LOS CAMPOS");
            
            }elseif 
            (is_numeric($body["Identificacion"]) &&
             is_string($body["Nombre"]) && 
             is_string($body["Apellidos"]) &&
             is_numeric($body["Edad"]) &&
             is_numeric($body["Telefono"])&&
             is_string($body["Direccion"])&&
             filter_var($body["Email"], FILTER_VALIDATE_EMAIL)){
    
                $datos=$cliente->update_cliente(
                    $body["Identificacion"],
                    $body["Nombre"],
                    $body["Apellidos"],
                    $body["Edad"],
                    $body["Telefono"],
                    $body["Direccion"],
                    $body["Email"]);
    
                echo json_encode("CLIENTE ACTUALIZADO CON EXITO");
                echo json_encode($datos);
          
            }elseif (!is_numeric($body["Identificacion"])) {
                echo json_encode("EL CAMPO IDENTIFICACION DEBE SER NUMERICO");
            } elseif (!is_string($body["Nombre"])) {
                echo json_encode("EL CAMPO NOMBRE DEBE SER ALFABETICO");
            }elseif (!is_string($body["Apellidos"])) {
                echo json_encode("EL CAMPO APELLIDO DEBE SER ALFABETICO");
            }elseif ( !is_numeric($body["Edad"])) {
                echo json_encode("LA EDAD DEBE SER UN NUMERO");
            }elseif (!is_numeric($body["Telefono"])) {
                echo json_encode("EL CAMPO TELEFONO DEBE SER NUMERICO");
            }elseif ( !is_string($body["Direccion"])) {
                echo json_encode("EL CAMPO DIRECCION DEBE SER ALFANUMERICO");
            }elseif (!filter_var($body["Email"], FILTER_VALIDATE_EMAIL)) {
                echo json_encode("DEBES REGISTRAR UN EMAIL VALIDO");
            }

        break;

        case 'mostrar':
            $rspta=$cliente->mostrar($Idecliente);
             //Codificar el resultado utilizando json
             echo json_encode($rspta);
        break;

        case "Delete":
            $datos=$cliente->delete_cliente($body["Id_cliente"]);
            echo json_encode("Delete Correcto");
            echo json_encode($datos);


        break;

        

        
    } 
        
?>
