<?php 
class Empleado
{
    private $pdo;

    private $id;
    private $ubicacion;  
    private $nombre_completo;
    private $puesto;
    private $sap;
    private $jefe_inmediato;
          
    public function __CONSTRUCT(){
        $this->pdo = BaseDeDatos::Conectar();
    }
    public function getjefe_inmediato()
    {
        return $this->jefe_inmediato;
    }

    public function setjefe_inmediato($jefe_inmediato)
    {
        $this->jefe_inmediato = $jefe_inmediato;
        return $this;
    }

    public function getubicacion()
    {
        return $this->ubicacion;
    }

    public function setubicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
        return $this;
    }
    public function getsap()
    {
        return $this->sap;
    }

    public function setsap($sap)
    {
        $this->sap = $sap;
        return $this;
    }
   public function getid()
    {
        return $this->id;
    }

    public function setid($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getnombre_completo()
    {
        return $this->nombre_completo;
    }

    public function setnombre_completo($nombre_completo)
    {
        $this->nombre_completo = $nombre_completo;
        return $this;
    }

    public function getpuesto()
    {
        return $this->puesto;
    }

    public function setpuesto($puesto)
    {
        $this->puesto = $puesto;
        return $this;
    }


    public function getEmpleado(){
        try {
            $sql = "SELECT * FROM empleados";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Eliminar($id){
        try {
            $sql = "DELETE from empleados where id = ?";
            $this->pdo->prepare($sql)
                 ->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>