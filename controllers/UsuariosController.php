<?php 
class UsuariosController{
    private $usuario;
    public function __construct(){
        try{
            $this->usuario = new Usuario();
        }
        catch(Exception $error){
            die("Error found in file Controller/UsuariosController.php:: ".$error->getMessage());
        }

    }
    public function index(){
        $title = "Inicio | Usuarios";
        require_once("views/usuario/index.php");
    }

    public function register(){
        $title = "Registrar | Usuarios";
        require_once("views/usuario/register.php");
    }

    public function registerUser(){
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $descripcion = $_POST['descripcion'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $date = date("Y-m-h:H:i:s");
        $this->usuario->insert($nombres, $apellidos, $descripcion, $email, $password, $date);
        $_SESSION['user'] = $email;
        $_SESSION['nombres'] = $nombres;
        $_SESSION['descripcion'] = $descripcion;
        header("location:?class=Administrador&method=home");
    }
}
?>