<?php
    abstract class Conectar{
        private $host = "localhost";
        private $bdt = "bdt_mantenimiento";
        //Conexion local
        private $usuario= "root";
        private $password = ""; //password xampp
        //private $password = "password"; //password para linux
        
        private $link;
        protected $Conexion;
        public function __construct(){
            $this->link  = "mysql:host=".$this->host;
            $this->link .= ";dbname=".$this->bdt;
            try{
                $this->Conexion = new PDO($this->link, $this->usuario, $this->password);
                $this->Conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->Conexion->query("SET NAMES 'utf8';");
            }catch(PDOException $e){
                echo "No hay conexión con la base de datos";
            }
            return $this->Conexion;
        }

        public function cerrarConexion(){
            $this->Conexion = null;
        }
    }
?>