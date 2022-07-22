<?php
    class Mantenimiento extends Conectar{
        public $placa;
        public $vehiculo;
        public $ultimo_ciclo_de_Mantenimiento;
        public $ciclo_Recomendado;
        public $fecha;
        public $numero_de_Factura;
        public $empresa;
        public $valor;
        public $observaciones;
        public $codigo_del_servicio_Producto;
        public $nombre_del_servicio_Producto;
        public $cantidad;
        public $valor_Unit;
        public $valor_Total;

        public $sql;
        public $reg_inicio;
        public $registros;

        public function cargar(){
            $this->sql = "SELECT *  FROM mantenimientos 
            WHERE placa = ?"; 
            
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
            $this->sql = "SELECT *  FROM mantenimientos 
            WHERE campo1 = ? AND campo2= ? AND campoN = ? AND estado = 'Activo' 
            ORDER BY  campo1, campo2, ASC"; 
            if(isset($this->reg_inicio) && isset($this->registros)){
                $this->sql .= " LIMIT ".$this->reg_inicio.", ".$this->registros." ";
            }
            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->bindparam(1,$this->Vehiculo);
                $stm->bindparam(2,$this->Empresa);
                $stm->bindparam(3,$this->Valor);
                $stm->execute();
                $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            } catch (Exception $e) {
                echo "Error al consultar los datos ".$e;
            }
        }
    }

?>