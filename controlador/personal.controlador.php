<?php 
require_once('modelo/personal.php');
class PersonalControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Personal();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
     //   require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
       // require_once "View/otro/index.php";
        //echo "Este es el controlador de Inicio";
       // require_once "View/footer.php";
        //Que cargue el footer
    }

     public function FormAgregar(){
            //$BD = BasedeDatos::Conectar();
            //$idobj = $_SESSION['id'];
            $titulo = "Agregar";
            //si se pasa un id modificar producto, sino agregar un producto
            $Per = new Personal();
            if(isset($_GET['id'])){
                $Per = $this->modelo->ObtenerId($_GET['id'],$id);
                $titulo = "Modificar";
            }
            //require_once "view/header.php";
            require_once "view/otro/agregar.php";
            //require_once "view/footer.php";
        }

        public function Guardar(){
            $id = $_SESSION['id'];
           
            $Per = new Personal();
            $Per->setpuesto($_POST['Perp']);
            $Per->setnombre_completo($_POST['Pernom']);
            $Per->setsap($_POST['Persap']);
            $Per->setubicacion($_POST['Perubi']);
            $Per->setjefe_inmediato($_POST['Perji']);
            $Per->setid($_POST['Perid']);
            $Per->getid() > 0?
            $this->modelo->Actualizar($Per, $id):
            $this->modelo->Insertar($Per, $id);
        
           
            header("location:?c=personal");
        }

        public function Eliminar(){
            $this->modelo->Eliminar($_GET['id']);
            //var_dump($idobj);
            header('location:?c=personal');
        }

    public function Salir(){
        session_destroy();
        header("location:?c=index.php");
    } 
}
?>