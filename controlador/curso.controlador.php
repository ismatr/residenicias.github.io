<?php 
require_once('modelo/curso.php');
class CursoControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Curso();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
     //   require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
       // require_once "View/otro/index.php";
        //echo "Este es el controlador de Inicio";
       // require_once "View/footer.php";
        //Que cargue el footer
        require_once "vista/cursos/agregar.php";
    }

     public function FormAgregar(){
            //$BD = BasedeDatos::Conectar();
            //$idobj = $_SESSION['id'];
            $titulo = "Agregar";
            //si se pasa un id modificar producto, sino agregar un producto
            $Cur = new Cursos();
            if(isset($_GET['id'])){
                $Cur = $this->modelo->ObtenerId($_GET['id'],$id);
                $titulo = "Modificar";
            }
            require_once "view/header.php";
            require_once "agregarskap.php";
            require_once "view/footer.php";
        }

        public function Guardar(){
            $id = $_SESSION['id'];

            $Cur = new Cursos();
            $Cur->setnombre_cursos($_POST['Curnc']);
            $Cur->setnombre_completo($_POST['Curnom']);
            $Cur->setsap($_POST['Cursap']);
            $Cur->setid($_POST['Curid']);
            
            $Cur->getid() > 0?
            $this->modelo->Actualizar($Cur, $id):
            $this->modelo->Insertar($Cur, $id);
        
           
            header("location:?c=cursos");
        }

        public function Eliminar(){
            $this->modelo->Eliminar($_GET['id']);
            //var_dump($idobj);
            header('location:?c=cursos');
        }

    public function Salir(){
        session_destroy();
        header("location:?c=index.php");
    } 
}
?>