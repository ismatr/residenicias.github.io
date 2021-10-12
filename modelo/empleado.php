<?php 
class Empleado
{
    private $pdo;

    private $id;
    private $curso;    
    private $nombre_completo;
    private $puesto;     

    
    public function __CONSTRUCT(){
        $this->pdo = BaseDeDatos::Conectar();
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

    public function getcurso()
    {
        return $this->curso;
    }

    public function setcurso($curso)
    {
        $this->curso = $curso;
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