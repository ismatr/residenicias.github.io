
<?php 
class Curso
{
    private $pdo;

    private $id;
    private $nombre_cursos;
    private $nombre_completo;
    private $sap; 

    public function __CONSTRUCT(){
        $this->pdo = BaseDeDatos::Conectar();
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

    public function getnombre_cursos()
    {
        return $this->nombre_cursos;
    }

    public function setnombre_cursos($nombre_cursos)
    {
        $this->nombre_cursos = $nombre_cursos;
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


    public function getCursos(){
        try {
            $sql = "SELECT * FROM cursos";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Eliminar($id){
        try {
            $sql = "DELETE from cursos where id = ?";
            $this->pdo->prepare($sql)
                 ->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>