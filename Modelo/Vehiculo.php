<?php
class Vehiculo extends Conectar{
    public $id;
    public $placa;
    public $nombre;
    public $idMarca;
    public $idTipo;
    public $idTipoCombustible;
    public $numero_motor;
    public $numero_chasis;
    public $modelo;
    public $idEmpresaSoat;
    public $fecha_reg;
    public $estado;

    public $sql;
    public $reg_inicio;
    public $registros;

    public function cargar(){
        $this->sql = "SELECT *  FROM vehiculos WHERE placa = ?"; 
        
        try {
            $stm = $this->Conexion->prepare($this->sql);
            $stm->bindparam(1,$this->placa);
            $stm->execute();
            $data = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            echo "Error al consultar los datos ".$e;
        }
    }

    public function listar(){
        $this->sql = "SELECT id, placa, nombre, idMarca, idTipo, idTipoCombustible, numero_motor, numero_chasis, modelo, idEmpresaSoat  FROM vehiculos 
        WHERE estado = 'Activo' 
        ORDER BY  idTipo, nombre ASC"; 
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

    public function eliminar(){
        $this->sql = "DELETE FROM vehiculos WHERE placa = ?"; 
        
        try {
            $stm = $this->Conexion->prepare($this->sql);
            $stm->bindparam(1,$this->placa);
            if($stm->execute()){
                echo "Registro eliminado de forma exitosa";
            }
        } catch (Exception $e) {
            echo "Error al consultar los datos ".$e;
        }
    }
}