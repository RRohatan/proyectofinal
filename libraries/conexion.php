<?php
//require_once ("../config/config.php");  

class Conectar{
    protected $dbh;

    protected function Conexion(){
        try {
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=final_project","root",);
            return $conectar;	
        } catch (Exception $e) {
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();	
        }
    }

    public function set_names(){	
        return $this->dbh->query("SET NAMES 'DB_CHARSET'");
    }
}
    
   ?>

