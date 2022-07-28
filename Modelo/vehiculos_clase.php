<?php

    class Vehiculos_clase extends Conectar{
        public $id;
        public $nombre;
        public $descripcion;
        public $fecha_reg;
        public $estado;
    
        public $sql;
        public $reg_inicio;
        public $registros;
    
        public function agregar(){
            $this->sql = "INSERT INTO vehiculos_clase(nombre,descripcion) VALUE(?,?)"; 
            
            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->bindparam(1,$this->nombre);
                $stm->bindparam(2,$this->descripcion);
                if($stm->execute()){
                    echo "Registro agregado de forma exitosa";
                }
            } catch (Exception $e) {
                echo "Error al consultar los datos ".$e;
            }
        }

        public function cargar(){
            $this->sql = "SELECT id,nombre,descripcion,fecha_reg,estado  FROM vehiculos_clase WHERE id = ?"; 
            
            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->bindparam(1,$this->id);
                $stm->execute();
                $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            } catch (Exception $e) {
                echo "Error al consultar los datos ".$e;
            }
        }
    
        public function listar(){
            $this->sql = "SELECT id, nombre, descripcion,fecha_reg,estado  FROM vehiculos_clase 
            WHERE estado = '1' 
            ORDER BY  nombre ASC"; 
            if(isset($this->reg_inicio) && isset($this->registros)){
                $this->sql .= " LIMIT ".$this->reg_inicio.", ".$this->registros." ";
            }
            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->execute();
                $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            } catch (Exception $e) {
                echo "Error al consultar los datos ".$e;
            }
        }
    
        public function modificar(){
            $this->sql = "UPDATE vehiculos_clase SET nombre = ? , descripcion = ?"; 
            
            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->bindparam(1,$this->nombre);
                $stm->bindparam(2,$this->descripcion);
                if($stm->execute()){
                    echo "Registro agregado de forma exitosa";
                }
            } catch (Exception $e) {
                echo "Error al consultar los datos ".$e;
            }
        }

        public function eliminar(){
            $this->sql = "DELETE FROM vehiculos_clase WHERE id = ?"; 
            
            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->bindparam(1,$this->id);
                if($stm->execute()){
                    echo "Registro eliminado de forma exitosa";
                }
            } catch (Exception $e) {
                echo "Error al consultar los datos ".$e;
            }
        }
    }


?>